<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/templates/head.php");?>
    <script src="/js/admin.js"></script>
</head>
<body>
    <div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <h3>ROYAL HOSTEL - ADMIN PANEL</h3>
            </a>
        </div>

        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrador <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="/index.php"><i class="fa fa-fw fa-power-off"></i>Salir</a></li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-user"></i>USUARIOS<i class="fa fa-fw fa-angle-down pull-right"></i></a>

                    <ul id="submenu-1" class="collapse">
                        <li><a href="#" id="listadoUsuarios"><i class="fa fa-fw fa-users"></i>Listado de usuarios</a></li>
                        <li><a href="#" id="addUsuario"><i class="fa fa-fw fa-user-plus"></i>Insertar usuario</a></li>
                        <li><a href="#" id="removeUsuario"><i class="fa fa-fw fa-user-times"></i>Eliminar usuario</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-bed"></i> HABITACIONES<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#" id="listadoHabitaciones"><i class="fa fa-fw fa-cog"></i>Listado de habitaciones</a></li>
                        <li><a href="#" id="addHabitacion"><i class="fa fa-fw fa-cog"></i>Insertar habitación</a></li>
                        <li><a href="#" id="removeHabitacion"><i class="fa fa-fw fa-cog"></i>Eliminar habitación</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>

                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-star"></i> SERVICIOS<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li><a href="#" id="listadoServicios"><i class="fa fa-fw fa-cog"></i>Listado de servicios</a></li>
                        <li><a href="#" id="addServicio"><i class="fa fa-fw fa-cog"></i>Insertar servicio</a></li>
                        <li><a href="#" id="removeServicio"><i class="fa fa-fw fa-cog"></i>Eliminar servicio</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>

                <li>
                    <a href="#" id="listadoReservas"><i class="fa fa-address-book-o"></i> RESERVAS</a>
                </li>
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1 class="text-center">Bienvenido Admin! hoy es: 
                        <?php setlocale(LC_TIME, 'es_ES.UTF-8');
                        echo date("d-m-Y H:i:s"); 
                        ?>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</body>
</html>