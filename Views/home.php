<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="na vbar-brand" href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url(); ?>Assets/images/logo.png" alt="Logo" style="width: 90px"/>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>actores">Actores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>trailers">Trailers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>premios">Premios</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url(); ?>Assets/images/imagen1.png" class="d-block w-100" alt="imagen2"/>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url(); ?>Assets/images/imagen2.png" class="d-block w-100" alt="imagen3"/>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url(); ?>Assets/images/imagen3.png" class="d-block w-100" alt="imagen1"/>
        </div>
      </div>
    </div>
    
    <div class= "container">
      <div class="card-group">
      <div class="card">
        <img src="<?php echo base_url(); ?>Assets/images/will.png" class="d-block w-75" alt="will"/>
        <div class="card-body">
          <h5 class="card-title">Temporada No 1</h5>
          <p class="card-text">Will Byers, un niño de 12 años de edad, tras pasar 10 horas jugando Calabozos y Dragones con sus amigos Mike Wheeler, Dustin Henderson y Lucas Sinclair, desaparece misteriosamente tras regresar a casa. Al día siguiente su hermano Jonathan Byers y su madre Joyce Byers, se dan cuenta de que no está en casa.</p>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo base_url(); ?>Assets/images/eleven.png" class="d-block w-75" alt="eleven"/>
        <div class="card-body"> 
          <h5 class="card-title">Temporada No 2</h5>
          <p class="card-text">Se cree que Eleven está muerta, aunque en realidad está siendo protegida por Hopper (David Harbour). Mientras tanto, varios demogorgons comandados por el mind flayer que poseía a Will atacan al pueblo.</p>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo base_url(); ?>Assets/images/murray.png" class="d-block w-75" alt="murray"/>
        <div class="card-body">
          <h5 class="card-title">Temporada No 3</h5>
          <p class="card-text">Alexei es asesinado a tiros por Grigori frente a Murray. Hopper y Joyce evaden a varios agentes soviéticos y descubren que los agentes están buscando a los niños en el centro comercial. En el centro comercial, el grupo de Once llega a tiempo para evitar que los rusos disparen al grupo de Dustin.</p>
        </div>
    </div>
  </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>