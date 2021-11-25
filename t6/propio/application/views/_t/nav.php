<nav class="container navbar navbar-expand-lg navbar-dark bg-dark rounded my-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url()?>">
    	<img src="<?=base_url()?>assets/img/home.png" alt="INICIO" style="width:40px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Países
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?=base_url()?>pais/r">Ver lista países</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>pais/c">Crear país</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Aficiones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?=base_url()?>aficion/r">Ver lista aficiones</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>aficion/c">Crear afición</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Personas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?=base_url()?>persona/r">Ver lista personas</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>persona/c">Crear persona</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>
