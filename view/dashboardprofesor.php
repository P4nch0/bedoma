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
            include("../model/dbconnect.php");
        ?>

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboardalumno.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                                    <div class="huge">
                                        <?php
                                                $dir = '../trabajos';
                                                $sql = 'SELECT COUNT(*) FROM trabajo WHERE evaluado = 1;';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r($row[0]);
                                                }

                                            ?>
                                    </div>
                                    <div>Trabajos por Evaluar</div>
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
                                    <div class="huge">
                                    <?php
                                                $dir = '../trabajos';
                                                $sql = 'SELECT COUNT(*) FROM trabajo;';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r($row[0]);
                                                }

                                            ?>
                                    </div>
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
                                    <div class="huge">
                                        <?php
                                                $dir = '../trabajos';
                                                $sql = 'SELECT COUNT(*) FROM trabajo WHERE CALIFICACION = "F" OR CALIFICACION = "R";';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r($row[0]);
                                                }

                                            ?>
                                    </div>
                                    <div>Trabajos en Vigilancia</div>
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
                            <i class="fa fa-files-o fa-fw"></i> Trabajos Entregados

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Matricula</th>
                                                    <th>Archivo</th>
                                                    <th>Fecha de Entrega</th>
                                                    <th>Evaluacion</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $dir = '../trabajos';
                                                $sql = 'SELECT * FROM trabajo;';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    # print_r($row);
                                                    print_r("<tr>
                                                    <td>$row[1]</td>
                                                    <td>
                                                    <a href='$dir/$row[3]'>$row[3]</a>
                                                    </td>
                                                    <td>$row[5]</td>
                                                    <td>$row[8]</td>
                                                    <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' data-whatever='$row[0]'>Evaluar</button></td>
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
                                                        <form action="../model/filegrade.php" method="POST">
                                                          <div class="form-group">
                                                            <input name="idt" type="hidden" class="form-control" id="recipient-name">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Calificacion:</label>
                                                            <select name="calif" class="form-control">
                                                                <option value="F">F</option>
                                                                <option value="R">R</option>
                                                                <option value="M">M</option>
                                                                <option value="E">E</option>
                                                            </select>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="message-text" class="control-label">Comentarios:</label>
                                                            <textarea name="com" class="form-control" id="message-text"></textarea>
                                                          </div>
                                                            <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary">Evaluar</button>
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
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Evaluacion trabajo: ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })
    </script>

</body>

</html>
