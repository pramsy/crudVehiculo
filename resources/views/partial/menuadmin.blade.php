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
          <a class="nav-link" href="{{ route('user.index') }}">Usuario</a>
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
