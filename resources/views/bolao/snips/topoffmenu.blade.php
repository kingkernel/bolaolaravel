@section("topmenu")
<!-- top menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#">Bolão Regional</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
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
          </li> --}}
        </ul>
        {{-- <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form> 
        
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <button type="button" class="btn btn-primary">Usuários</button>
        <div class="btn-group" role="group">
        <button id="btnGroupDrop4" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
        <a class="dropdown-item" href="/cadastro">Cadastrar-me</a>
      </div>--}}

      <div class="dropdown ms-3">
        <button class="btn btn-bd-light dropdown-toggle" id="bd-versions" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
          <span class="d-none d-lg-inline">Bootstrap</span> v5.0
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-versions" data-bs-popper="static">
          <li><a class="dropdown-item current" aria-current="true" href="/docs/5.0/">Latest (5.0.x)</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="https://getbootstrap.com/docs/4.6/">v4.6.x</a></li>
          <li><a class="dropdown-item" href="https://getbootstrap.com/docs/3.4/">v3.4.1</a></li>
          <li><a class="dropdown-item" href="https://getbootstrap.com/2.3.2/">v2.3.2</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/docs/versions/">All versions</a></li>
        </ul>
      </div>

  </div>
</div>

      </div>
    </div>
  </nav>
  <!-- end top mennu-->


@endsection