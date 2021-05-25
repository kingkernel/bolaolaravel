@extends('bolao.model')
@section('maincontent')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                    <div class="card-body">
                    <span class="fa fa-address-card fa-4x" style="float:left; margin:10px"></span><h5 class="card-title">{{$usuario["name"]}}</h5>
                    <p class="card-text">Escolha uma senha para poder acessar nossa comunidade</p>
                    <fieldset>
                        <form action="http://{{$_SERVER["HTTP_HOST"]}}/valida/{{$hash}}" method="POST">
                            @csrf
                            <input type="hidden" name="user" value="{{$usuario["email"]}}">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Senha : </label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="newPassword">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Repita  :</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" name="confirmPassword">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                    <div class="col-sm-2 offset-md-2">
                                        <input type="submit" class="btn btn-primary" value="Confirmar">
                                    </div>
                              </div>
                    </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection