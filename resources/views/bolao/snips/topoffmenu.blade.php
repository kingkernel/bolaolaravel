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
      <a class="dropdown-item" href="#">Login</a>
      <a class="dropdown-item" href="#">Cadastrar-me</a>
    </div>
  </div>
</div>

      </div>
    </div>
  </nav>
  <!-- end top mennu-->
@endsection