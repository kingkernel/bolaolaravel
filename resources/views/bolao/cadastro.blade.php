@extends("bolao.model")
@section("maincontent")
<div class="container-fluid" style="margin-top: 25px;">
    <div class="card">
        <div class="card-header"> Cadastro de Membro da comunidade - <a href="#">Leia os termos da Comunidade</a>
        </div>
        <form action="/newuser" method="POST">
            @csrf
        <div class="card-body">
            <h5 class="card-title">Nome:</h5>
            <input type="text" class="form-control" name="user-nome" placeholder="Seu nome completo" maxlength="150" required="">
            <h5 class="card-title">CPF:</h5>
            <input type="text" class="form-control" id="user-cpf" name="user-cpf" placeholder="Seu CPF" maxlength="14" required="">
            <h5 class="card-title">Nascimento:</h5>
            <input type="text" class="form-control" id="user-nasc" name="user-nasc" placeholder="Seu Nascimento dia - mês - ano" maxlength="10" required="">
            <h5 class="card-title">E-mail:</h5>
            <input type="email" class="form-control" name="user-email" placeholder="Seu e-mail para as notificações" maxlength="150" required="">
            <h5 class="card-title">PIX:</h5>
            <input type="text" class="form-control" name="user-pix" placeholder="Seu Pix para recebimento" maxlength="150" required="">
            <h5 class="card-title">Estado:</h5>
            <select class="form-select" id="user-estado" name="user-estado" required="">
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
            </select>
            <h5 class="card-title">Cidade:</h5>
            <select class="form-select" id="user-cidade" name="user-cidade">
            </select>
        </div>
        <div class="card-body">
            <input type="submit" value="Ingressar no Clube " class="btn btn-primary">
        </div>
    </form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){

    $("#user-estado").change(function (){
        let estado = $("#user-estado").val();
        $("#user-cidade").load('http://'+document.location.hostname+'/ajax/cidades/'+ estado, function (data){ 
            $("#user-cidade").html(data); 
        })
    })
});
</script>
@endsection