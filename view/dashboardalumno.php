<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alumno</title>

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
            include("../model/dbconnect.php");
        ?>

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboardalumno.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>


                        <li>
                            <a href="entrega.php"><i class="fa fa-file-o fa-fw"></i> Subir Nuevo Trabajo</a>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
                                                $sql = 'SELECT COUNT(*) from califiacion 
                                                where idalumno = "' . $_SESSION['user'] . '";';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r($row[0]);
                                                }

                                            ?></div>
                                    <div>Trabajos Entregados</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
                                                $sql = 'SELECT COUNT(*) from trabajo as t 
                                                inner join materia as m on t.idmateria = m.idmateria 
                                                inner join atiende as a on a.idalumno = "' . $_SESSION['user'] . '" and a.idmateria = t.idmateria;';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r($row[0]);
                                                }

                                            ?></div>
                                    <div>Trabajos Totales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Trabajos para Mejorar</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-files-o fa-fw"></i> Trabajos por Entregar

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Trabajo</th>
                                                    <th>Descripcion</th>
                                                    <th>Materia</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $dir = '../trabajos';
                                                $sql = 'select t.idtrabajo, t.nombre, t.descripcion, m.nombre from trabajo as t 
                                                inner join materia as m on t.idmateria = m.idmateria 
                                                inner join atiende as a on a.idalumno = "' . $_SESSION['user'] . '" and a.idmateria = t.idmateria;';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r("<tr>
                                                    <td>$row[1]</td>
                                                    <td>$row[2]</td>
                                                    <td>$row[3]</td>
                                                    <td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal' data-whatever='$row[0]' data-materia='$row[3]'>Entregar</button></td>
                                                </tr>");
                                                }
                                                ?>
                                                
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="exampleModalLabel">Evaluacion</h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form action="../model/fileupload.php" method="POST">
                                                            <input name="idt" type="hidden" class="form-control" id="idt">
                                                                    <input type="hidden" name="idalumno" readonly value="<?php echo $_SESSION['user']; ?>">
                                                                    <input type="hidden" name="nmria" id="nmria">
                                                                   <div class="form-group">
                                                                    <label for="metal" class="control-label">Fecha </label>
                                                                    <input type="date" class="form-control" name="nac" value="<?php echo date('Y-m-d'); ?>" readonly>
                                                                   </div>
                                                                
                                                            <div class="modal-footer">
                                                                <div class="form-group"> 
                                                                    <input name="userfile" type="file" id="exampleInputFile">
                                                                </div>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                <input type="submit" class="btn btn-primary" value="Subir archivo" />
                                                      </div>
                                                        </form>
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                                </div>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Materias
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php
                                                $sql = 'select m.nombre
                                                        from materia as m inner join atiende as a on m.idmateria = a.idmateria
                                                        where a.idalumno = "' . $_SESSION['user'] . '";';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    #print_r($row);
                                                    print_r("<a href='#' class='list-group-item'>
                                    <i class='fa fa-comment fa-fw'></i> $row[0]
                                    </span>
                                </a>");
                                                }
                                                ?>
                                
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                                </div>
            </div>
            <!-- /.row -->
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

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var materia = button.data('materia')
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Trabajo #' + recipient)
          modal.find('#nmria').val(materia)
          modal.find('#idt').val(recipient)
        })
    </script>

</body>

</html>
