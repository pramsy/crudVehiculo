<nav class="navbar navbar-expand-lg navbar-light bg-light">
<p> Bem vindo: {{ $_SESSION['nome']}} </p>
  <div class="container-fluid ">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('site.inicio') }}"><img src="{{ asset('/imagens/logo1.png')}}" class="h-25 w-25 h-md-50 w-md-50 d-inline-block" alt="logo"></a>
      <button class="navbar-toggler ms-auto mb-2 mb-lg-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.inicio') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.carro') }}">Carro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.usuario') }}">Usuario</a>
        </li>
        
        

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('admin.usuario.cadastrar') }}"><i class="fa-regular fa-user"></i> Usuario</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.carro.cadastrar') }}"><i class="fa fa-car"></i> Carro</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Listar
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('admin.usuario.listar') }}"><i class="fa-regular fa-user"></i> Usuario</a></li>
            <li><a class="dropdown-item" href="{{ route('admin.carro.listar') }}"><i class="fa fa-car"></i> Carro</a></li>
          </ul>
        </li>
        
      </ul>
      
        <form class="d-flex ms-auto mb-2 mb-lg-0">
            
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
    </div>
    <ul class="navbar-nav m-2 ">
            <li class="nav-item">
            <a class="btn btn-success nav-link" href="{{ route('admin.sair') }}" role="button">  Sair</a>
            </li>
        </ul>
  </div>
</nav>
