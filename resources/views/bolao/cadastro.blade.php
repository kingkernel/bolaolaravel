@extends("bolao.model")
@section("maincontent")
<div class="container-fluid" style="margin-top: 25px;">
    <div class="card">
        <div class="card-header"> Cadastro de Membro da comunidade - <a href="#">Leia os termos da Comunidade</a>
        </div>
        <form action="/usuariosCadastro" method="POST">
            @csrf
        <div class="card-body">
            <h5 class="card-title">Nome:</h5>
            <input type="text" class="form-control" name="user-nome" placeholder="Seu nome completo" maxlength="150" required="">
            <h5 class="card-title">CPF:</h5>
            <input type="text" class="form-control" id="user-cpf" name="user-cpf" placeholder="Seu CPF" maxlength="14" required="">
            <h5 class="card-title">Nascimento:</h5>
            <div class="row">
                <div class="col-sm-1">
                    <select class="form-select" name="dt-day">
                        @for($n=1; $n<=31; $n++)
                            <option value="{{$n}}">{{$n}}</option>
                        @endfor
                    </select>
                </div>
                    <div class="col-sm-2">
                        <select class="form-select" name="dt-month">
                            <option value="01">Janeiro</option>
                            <option value="02">Fevereiro</option>
                            <option value="03">Março</option>
                            <option value="04">Abril</option>
                            <option value="05">Maio</option>
                            <option value="06">Junho</option>
                            <option value="07">Julho</option>
                            <option value="08">Agosto</option>
                            <option value="09">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                    </div>
                <div class="col-sm-1">
                    <select class="form-select" name="dt-year">
                        @for($n=1900; $n<=date('Y'); $n++)
                        <option value="{{$n}}">{{$n}}</option>
                    @endfor
                    </select>
                </div>
                <!-- <input type="text" class="form-control" id="user-nasc" name="user-nasc" placeholder="Seu Nascimento dia - mês - ano" maxlength="10" required=""> -->
            </div>
            <h5 class="card-title">E-mail:</h5>
            <input type="email" class="form-control" name="user-email" placeholder="Seu e-mail para as notificações" maxlength="150" required="">
            <h5 class="card-title">PIX:</h5>
            <input type="text" class="form-control" name="user-pix" placeholder="Seu Pix para recebimento" maxlength="150" required="">
            <h5 class="card-title">Estado:</h5>
            <select class="form-select" id="user-estado" name="user-estado" required="">
                @foreach (json_decode($estados, true) as $key=>$value)
                    <option value="{{$value["sigla"]}}">{{$value["sigla"]}}</option>
                @endforeach
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
        $("#user-cidade").load('http://{{$_SERVER["HTTP_HOST"]}}/ajaxcidades/'+estado, function (data){ 
            var obj = JSON.parse(data);
            var options = '';
            obj.forEach(function(o){
                options += '<option value="'+(o.id)+'">'+(o.cidade)+'</option>';
            });
            $("#user-cidade").html(options); 
        })
    })
});
</script>
@endsection