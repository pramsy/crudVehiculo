<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    <div class="navbar-header">
      <a class="navbar-brand" href="/inicio"><img src="{{ asset('/imagens/logo1.png')}}" class="h-25 w-25 h-md-50 w-md-50 d-inline-block" alt="logo"></a>
      <button class="navbar-toggler ms-auto mb-2 mb-lg-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contato">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sobre">Sobre</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/usuario"><i class="fa-regular fa-user"></i> Usuario</a></li>
            <li><a class="dropdown-item" href="carro"><i class="fa fa-car"></i> Carro</a></li>
            <li><a class="dropdown-item" href="email"> <i class="fa fa-mail"></i> Email</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex ms-auto mb-2 mb-lg-0">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
