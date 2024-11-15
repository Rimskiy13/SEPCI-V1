<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"
  integrity="sha512-NZCf0L2aVGRiFW/XR0X9st8YzmMv7vHwqon5r5rzhUNlO/Tgdy/4G22l3LxH2OzNfDgYOKhcSihIpg24OvJ0dA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"
  integrity="sha512-2cc7Vwfuw07US+13vZ8bLcRi9ZxHx1FtKNp8YgP/m5a3HtNCgIvE8NIVW9C9N/HlhOjNHCOv+8kNSYr5r5q3zA=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Subcomite de Etica y de Prevencion de Conflictos de Interes</title>
  <link rel="icon" href="img/logo-SEPCI.png" />
  <link rel="shortcut icon" href="img/logo-SEPCI.jpg" type="image/x-icon" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
  <section class="Main_header">
    <header>
      <img src="img/logoEducacion.png" class="img1" />
      <img src="img/Logo-TecNM.png" class="img2" />
      <img src="img/logo-Itmorelia.png" class="img3" />
      <img src="img/logo-SEPCI.png" alt="sepci" class="img4" />
    </header>
    <header class="Menu">
      <div class="contenedor_menu">
        <nav>
          <a class="active" href="index.php">Inicio</a>
          <a href="Capacitate.html">Capacitate</a>
          <a href="Documentos.html">Documentos</a>
          <a href="Buzon-de-atencion.html">Buzón de Atención</a>
          <a href="Contacto.html">Contacto</a>
        </nav>
      </div>
    </header>
  </section>

  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carrusel.png" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="img/carrusel.png" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="img/carrusel.png" class="d-block w-100" alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="titulo">
    <h2>Subcomite de Etica y de Prevencion de Conflictos de Interes</h2>
  </div>

  <div class="qsomos">
    <div class="qsomos_text">
      <h3>¿Quienes somos?</h3>
      <div class="sub"></div>
      <div class="qsomos_info">
        <?php
        include_once 'php/DBManager/endPointAboutUs.php';
        $row = $data->fetch_row();
        echo $row[1];
        ?>
      </div>
      <div class="qsomos_boton">
        <a href="<?php echo 'pdf/About Us/' . $row[2]; ?>" target="_blank">Ver Mas</a>
      </div>
    </div>
    <div class="qsomos_img">
      <img src="img/logo-SEPCI.png" alt="" />
    </div>
  </div>
  <div class="tituloM">
    <h2>Directorio de Miembros SEPCI</h2>
  </div>
  <main>
    <div class="container1">
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card">
          <img src="usu.png" alt="">

          <div class="contenido">
            <h3>Presidencia</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card">
          <img src="usu.png" alt="">

          <div class="contenido">
            <h3>Presidencia (Suplente)</h3>
          </div>
        </div>
      </a>
    </div>

    <div class="container_Medio">
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio">
            <h3>Secretaria Ejecutiva</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio">
            <h3>Secretaria Técnica</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio miembro">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio">
            <h3>Miembro 1</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio miembro">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio">
            <h3>Miembro 2</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio miembro">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio">
            <h3>Miembro 3</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="container_Medio_Supl">
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio_Supl">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio_Supl">
            <h3>Secretaria Ejecutiva (Suplente)</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio_Supl">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio_Supl">
            <h3>Secretaria Técnica (Suplente)</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio_Supl miembro">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio_Supl">
            <h3>Miembro 1 (Suplente)</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio_Supl miembro">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio_Supl">
            <h3>Miembro 2 (Suplente)</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Medio_Supl miembro">
          <img src="img/usu.png" alt="">

          <div class="contenido_Medio_Supl">
            <h3>Miembro 3 (Suplente)</h3>
          </div>
        </div>
      </a>
    </div>
    <div class="container_Final">
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Final">
          <img src="img/usu.png" alt="">

          <div class="contenido_Final">
            <h3>Secretaria Ejecutiva (Suplente)</h3>
          </div>
        </div>
      </a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#myModal">
        <div class="card_Final">
          <img src="img/usu.png" alt="">

          <div class="contenido_Final">
            <h3>Secretaria Técnica (Suplente)</h3>
          </div>
        </div>
      </a>
    </div>
  </main>

  <div class="contenedor-titulo">
    <h1 class="titulo-11">DOCUMENTOS DEL SEPCI</h1>
  </div>


  <div class="contenedor-pdfs">
    <?php
    include_once 'php/DBManager/endPointDocuments.php';
    while ($row = $data->fetch_assoc()) {
      ?>
      <a href="<?php echo 'pdf/Inicio/' . $row['root']; ?>" class="pdf">
        <img src="img/pdf.png" alt="PDF 1">
        <h3>
          <?php echo $row['name']; ?>
        </h3>
      </a>
      <?php
    }
    ?>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="text">
        <p>
          <strong>Contacto</strong> <br />Email: <br />
          cero.tolerancia@itmorelia.edu.mx
          <br />
          <br />
          <strong>Dirección:</strong>
          <br />
          Av Morelos Nte 2550, Santiaguito, <br />
          58110 Morelia, Mich.
        </p>
      </div>
      <div class="text">
        <p>
          <strong>Enlaces</strong><br />
          <a href="Inicio.html">Inicio</a><br />
          <a href="Capacitate.html">Capacitate</a><br />
          <a href="Documentos.html">Documentos</a><br />
          <a href="Buzon-de-atencion.html">Buzon de atencion</a><br />
          <a href="Contacto.html">Contacto</a>
        </p>
      </div>
      <div class="contenedor__contac">
        <iframe
          src="https://maps.google.com/maps?q=Instituto Tecnológico de Morelia&t=&z=16&ie=UTF8&iwloc=&output=embed"
          width="600" height="200" style="border: 0" allowfullscreen=""></iframe>
      </div>
    </div>
    <div class="texto">
      <p>
        &copy; Copyright 2023 TecNM Campus Morelia - Todos los Derechos
        Reservados
      </p>
    </div>
  </footer>
  </main>
  
</body>

<!-- Ventana emergente -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Ventana emergente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-2">
            <img class="imagen-recuadrov" src="usu.png" alt="Director">
          </div>
        </div>
        <form>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <p id="nombre">Nombre del sujeto</p>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">Figura:</label>
            <p id="apellido">Figura del empleado</p>
          </div>
          <div class="mb-3">
            <label for="cargo" class="form-label">correo:</label>
            <p id="cargo">Correo electronico</p>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Funcion en SEPCI:</label>
            <p id="correo">Funcion en SEPCI</p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>