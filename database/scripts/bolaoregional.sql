create database bolaoregional;
use bolaoregional;

create table estados
(
	sigla varchar(2) primary key
) engine=innodb charset=utf8mb4;

create table cidades
(
	id int auto_increment primary key, 
	sigla varchar(2) references estados(sigla),
	cidade varchar(150),
	ibgecode int unique
) engine=innodb charset=utf8mb4;

create table participantes
(	
	id int unsigned auto_increment primary key,
	nome varchar(150) not null,
	cpf varchar(15) unique,
	nascimento date not null,
	verificado boolean default 0,
	email varchar(60) unique not null,
	pix varchar(150) unique not null,
	credit double(15,2) default 0.0,
	estado varchar(2),
	cidade varchar(100),
	active boolean default 0,
	passwordkey varchar(250)
)engine=innodb charset=utf8mb4;

create table participantes_cred
(	
	id int unsigned auto_increment primary key,
	personid int references participantes(id),
	datatransfer datetime default CURRENT_TIMESTAMP,
	methodtransfer enum("boleto", "pix"),
	credit double(15,2)
)engine=innodb charset=utf8mb4;

create table rodada
(	
	id int unsigned auto_increment primary key,
	inicioarrecadacao datetime default CURRENT_TIMESTAMP,
	fimarrecadacao datetime,
	totalarrecadado double(15,2),
	estado varchar(2) not null,
	cidade varchar(100) not null,
	sorteiocode varchar(15) unique,
	sorteioapostopen boolean default 1
)engine=innodb charset=utf8mb4;

-- FINISHED
create table apostas
(
	id bigint unsigned auto_increment primary key,
	apostador int references participantes(id),
	apostadata datetime default CURRENT_TIMESTAMP,
	apostarodada varchar(15) references rodada(sorteiocode), 
	apostvalue double(15,2),
	typeaposta varchar(30) default "participante"
)engine=innodb charset=utf8mb4;

create table aposta_numbers
(
	id bigint  unsigned auto_increment primary key,
	apostaid bigint references apostas(id),
	apostnumber int,
	rodada int references rodada(id)
)engine=innodb charset=utf8;

create table particularapostas
(
	id int unsigned auto_increment primary key,
	bolao_owner int references participantes(id),
	bolao_name varchar(150),
	bolao_description mediumtext,
	bolao_code varchar(35) unique,
	arrecadacao double(15,2),
	aposta_value double(8,2),
	startbolao datetime default CURRENT_TIMESTAMP,
	endbolao datetime,
	finalized boolean default 0,
)engine=innodb charset=utf8mb4;

create table bolao_participantes
(
	id bigint unsigned primary key,
	bolaoid int references particularapostas(id),
	participanteid int references participantes(id),
	aposta_value double(15,2)
)engine=innodb charset=utf8;

-- create table creditcashback
-- (
--	id int unsigned auto_increment primary key,
--	participante int references participantes(id),
--	cashback double(12, 2)
-- )engine=innodb charset=utf8;

