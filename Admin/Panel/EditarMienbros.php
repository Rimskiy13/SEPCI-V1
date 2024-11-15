<?php
include("../../php/DBManager/open.php");
if ($sesion) {
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SEPCI</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/EditMienbros.css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">SEPCI</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-8 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../../php/DBManager/close.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Denuncias</div>

                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"></div>
                            Buzón de denuncias
                        </a>
                        <a class="nav-link" href="complaintAcept.php">
                            <div class="sb-nav-link-icon"></div>
                            Denuncias Aceptadas
                        </a>
                        <a class="nav-link" href="complaintCancel.php">
                            <div class="sb-nav-link-icon"></div>
                            Denuncias Canceladas
                        </a>
                        <div class="sb-sidenav-menu-heading">Inicio</div>
                        <a class="nav-link" href="SliderCRUD.php">
                            <div class="sb-nav-link-icon"></div>
                            Carrusel
                        </a>
                        <a class="nav-link" href="QuienesSomos.php">
                            <div class="sb-nav-link-icon"></div>
                            Editar ¿Quiénes somos?
                        </a>
                        <a class="nav-link" href="Miembros.php">
                            <div class="sb-nav-link-icon"></div>
                            Editar Miembros
                        </a>
                        <a class="nav-link" href="EditarDocumentos.php">
                            <div class="sb-nav-link-icon"></div>
                            Editar Documentos
                        </a>
                        <div class="sb-sidenav-menu-heading">Cursos</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"></div>
                            Editar Cursos
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Sesión inicada como:</div>
                    <?php echo $_SESSION['name']; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Editar Miembros</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Inicio/Editar Miembros</li>
                    </ol>
                    <div class="card mb-4">
                        <section class="seccion">
                            <?php
                                //conexion
                                include_once '../../php/DBManager/endPointEachMembers.php';
                                $obj = new member();
                                $data = $obj->showMember($_REQUEST['id']);
                                $row = $data->fetch_row();
                                ?>
                            <form method="POST" enctype="multipart/form-data" role="form"
                                action="../../php/DBManager/actionEditMembers.php?id=<?php echo $_REQUEST['id'] ?>">
                                <div class="contenedor">
                                    <div class="conten_input">
                                        <div class="columna">
                                            <label for="name">Nombre: </label>
                                            <input type="text" class="input" name="name" id="celdaTexto"
                                                value="<?php echo $row[0]; ?>" />
                                        </div>
                                        <div class="columna">
                                            <label for="phone">Apellido Paterno: </label>
                                            <input type="text" class="input" name="middle"
                                                value="<?php echo $row[1]; ?>" />
                                        </div>
                                        <div class="columna">
                                            <label for="name_Denounced">Apellido Materno: </label>
                                            <input type="text" class="input" name="last"
                                                value="<?php echo $row[2]; ?>" />
                                        </div>
                                        <div class="columna">
                                            <label for="email">Correo Electronico: </label>
                                            <input type="text" class="input" name="mail" id="celdaTexto2"
                                                value="<?php echo $row[3]; ?>" />
                                        </div>
                                        <div class="columna">
                                            <label for="email">Rol: </label>
                                            <input type="text" class="input" name="rol" disabled="disabled"
                                                id="celdaTexto2" value="<?php echo $row[4]; ?>" />
                                        </div>
                                        <div class="columna">
                                            <label for="imagen">Imagen: </label>
                                            <div class="archivos">
                                                <div id="dropzone">
                                                    <p>
                                                        Arrastra y suelta un archivo aquí o haz clic para seleccionar
                                                        uno.
                                                    </p>
                                                    <input type="file" id="imagen" name="imagen"
                                                        accept="image/png, image/jpg, image/jpeg" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="columna">
                                            <button type="submit" class="btn_send">Guardar cambios</button>
                                            <!-- <input class="btn_send" type="submit" value="Editar"> -->
                                        </div>
                                    </div>

                                </div>
                            </form>
                            </seccion>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
<?php
} else {
    header('Location: ../login.php');
}
?>
