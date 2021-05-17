-- ####################################################################
-- 		Procedures
-- ####################################################################

-- /# addParticipantes
-- @nome
-- @cpf
-- @nascimento
-- @email
-- @pix
-- @estado
-- @cidade
-- @passwordkey
-- #/

delimiter //
	create procedure addParticipantes
	(
		nome varchar(150),
		cpf varchar(15),
		nascimento date,
		email varchar(60),
		pix varchar(150),
		estado varchar(2),
		cidade varchar(100),
		passwordkey varchar(250)
	)
	begin
		insert into participantes
		(
			nome,
			cpf,
			nascimento,
			email,

			pix,
			estado,
			cidade,
			passwordkey
		)
		values
		(
			nome,
			cpf,
			nascimento,
			email,
			pix,
			estado,
			cidade,
			passwordkey
		);
	end //
delimiter ;

-- /# addApostCred
-- @var_memberid
-- @var_credit
-- @method_transfer

delimiter //
	create procedure addApostCred
	(
		var_memberid int,
		var_credit double(15,2),
		var_methodtransfer varchar(25)
	)
	begin
		insert into participantes_cred
		(
			personid,
			credit,
			methodtransfer
		)
		values
		(
			var_personid,
			var_credit,
			var_methodtransfer
		);
	end //
delimiter ;

-- /#
-- @memberid
-- @rodada
-- @creditovalue
-- #/

delimiter //
	create procedure addApostas
	(
		memberid int,
		rodada varchar(15),
		creditvalue double(8,2)
	)
	begin
		insert into apostas
		(
			apostador,
			apostadata,
			creditvalue,
			apostasorteio
		)
		values
		(
			apostador,
			now(),
			creditvalue,
			apostasorteio
		);
		
	end //	
delimiter ;

delimiter //
	create procedure activeUser(var_hash text)
	begin
		set @existe = (select count(*) as existe from participantes where passwordkey=var_hash);
		IF @existe = 1 THEN
			update participantes set active=1 where passwordkey=var_hash;
		END IF;
	end //
delimiter ;

delimiter //
	create procedure existe(var_hash text)
	begin
		select count(*) as existe from participantes where passwordkey=var_hash;
	end //
delimiter ;

delimiter //
	create procedure sp_login(arg_email varchar(60), arg_passkey varchar(250))
	begin
		select count(*) as existe from participantes where email=arg_email and passwordkey=arg_passkey;
	end //
delimiter ;

-- FINISHED

delimiter //
	create trigger validcredit after insert
	on participantes_cred
	for each row
	begin
		update participantes set credit = credit + new.credit
		where id=new.personid;
	end //
delimiter ;

delimiter //
	create procedure verificadesconto(arg_id int, arg_valor double(10,2))
	begin
		set @saldo = (select credit from participantes where id=arg_id);
		IF @saldo >= arg_valor THEN
		 update participantes set credit = credit - arg_valor where id=arg_id;
		 ELSE
			 SIGNAL SQLSTATE '45000'
			 SET MESSAGE_TEXT = 'NÃO HÁ SALDO SUFICIENTE!';
		END IF;
	end //
delimiter ;

delimiter //
	create trigger validapostadesc after insert
	on apostas
	for each row
	begin
		call verificadesconto(new.apostador, new.creditvalue);
	end //
delimiter ;

delimiter //
	create procedure addrodada
	(
		estado varchar(2),
		cidade varchar(100),
		sorteiocode varchar(15)
	)
	begin
		insert into rodada
		(
			estado,
			cidade,
			sorteiocode,
			fimarrecadacao
		)
		values
		(
			estado,
			cidade,
			sorteiocode,
			ADDDATE(NOW(), 5)
		);
	end //
delimiter ;

delimiter //
create procedure addapostanumbers
(
	apostador int,
	apostadata datetime,
	apostarodada int,
	creditvalue double(8,2)
)
begin
	insert into apostas
	(
		apostador,
		apostadata,
		apostarodada,
		creditvalue
	)
	values
	(
	apostador,
	apostadata,
	apostarodada,
	creditvalue
	);
end //
delimiter ;

delimiter //
	create procedure upPasskey(var_email varchar(50), var_passwordkey text(500))
	begin
		update participantes set
		passwordkey=var_passwordkey,
		active=1
		where email=var_email;
	end //
delimiter ;


call addParticipantes ("Nani", "70168814234", "2020-01-01", "nani@gmail.com", "96991635311", "AP", "santana", sha1("1234"));
call addApostCred(1, 20.5);
call addrodada("AP", "Santana", "AP0001-S0001");
-- select apostador, count(apostador) as acertos from apostateste where rodada=17 and number in (3, 11, 15, 19, 20, 35) group by apostador having acertos = 6;
