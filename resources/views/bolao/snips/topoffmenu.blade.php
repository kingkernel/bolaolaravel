@section("topmenu")
<!-- top menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#">Bolão Regional</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="regras/">Como Funciona</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cadastro/">Quero participar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
        
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-danger">Usuários</button>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop4" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
      <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
      <a class="dropdown-item" href="/cadastro">Cadastrar-me</a>
    </div>
  </div>
</div>

      </div>
    </div>
  </nav>
  <!-- end top mennu-->
<!-- -Modal de login -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">Entrar no Painel</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div> <div class="modal-body"> <form action="/auth/login/" method="POST"> <div class="mb-3 row" style="margin-top: 10px;"> <label for="inputPassword" class="col-sm-2 col-form-label">E-mail:</label> <div class="col-sm-10"> <input type="email" class="form-control" name="usermail" required=""> </div> </div> <div class="mb-3 row"> <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label> <div class="col-sm-10"> <input type="password" class="form-control" name="passkey" required=""> </div> </div></form></div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> <button type="submit" class="btn btn-primary">Entrar</button>  </div> </div> </div> </div>
<!-- -Modal de login -->

@endsection