<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark bg-gradient p-3 pe-4 ps-4">
    <a class="navbar-brand fw-bold ms-2 ms-md-3" href="#">ContentSynth</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="menu">
      <nav class="navbar-nav">
        <a class="nav-link fw-bold active" href="#">INICIO</a>
        <a class="nav-link fw-bold" href="#">PELICULAS</a>
        <a class="nav-link fw-bold" href="#">SERIES</a>
        <a class="nav-link fw-bold" href="#">LIBROS</a>
      </nav>
      <form class="d-flex ms-lg-4" role="search">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-search"></i></span>
          <input class="form-control me-1 fw-bold" type="search" placeholder="Buscar...">
        </div>
        <button class="btn btn-warning text-black fw-medium" type="submit">Search</button>
      </form>
      <nav class="navbar-nav ms-auto me-2 me-md-3">
        <a class="nav-link ms-4 fw-bold" href="#">INICIAR SESIÓN</a>
        <!-- Dropdown menu -->
        <div class="dropdown dropstart ps-2 profileDd">
          <button class="btn p-0 profileBtn" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-fluid p-0" style="border-radius: 50%;max-width: 37px;" src="" alt="Tu foto de perfil">
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item active" href="#">Mis listas</a></li>
            <li><a class="dropdown-item" href="#">Establecer preferecias</a></li>
            <li><a class="dropdown-item" href="#">Cambiar foto de perfil</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </nav>
</header>