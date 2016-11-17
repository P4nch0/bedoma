<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profesor</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include('navbar.php');
            include('../model/dbconnect.php');
        ?>

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboardprofesor.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>


                        <li>
                            <a href="materia.php"><i class="fa fa-gears fa-fw"></i> Admin Materia</a>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    
    

    
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <h1 class="page-header">Nueva Materia</h1>
                                                                    
                                <form role="form" enctype="multipart/form-data" action="../model/nuevamateria.php" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="idp" readonly value="<?php echo $_SESSION['user']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="metal">Nombre</label>
                                        <input type="text" class="form-control" name="nombre">
                                       </div>
                                    <input type="submit" class="btn btn-primary" value="Dar de alta" />
                                </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h1 class="page-header">Agregar alumno a materia</h1>
                                                                    
                                <form role="form" enctype="multipart/form-data" action="../model/grupo.php" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="idp" readonly value="<?php echo $_SESSION['user']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="metal">Alumno</label>
                                        <select name="ida" class="form-control">
                                          <?php
                                                $sql = "SELECT idalumno FROM alumno";
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r("<option value='" . $row[0] . "'>" . $row[0] . "</option>");
                                                }
                                                  
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="metal">Materia</label>
                                        <select name="idm" class="form-control">
                                          <?php
                                                $sql = 'SELECT * FROM materia where idprofesor ="' . $_SESSION['user'] . '";';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r("<option value='" . $row[0] . "'>" . $row[1] . "</option>");
                                                }
                                                  
                                            ?>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Agregar" />
                                </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    
    </body>
</html>