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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

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
                            <a href="dashboardprofesor.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="materia.php"><i class="fa fa-gears fa-fw"></i> Admin Materia</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="trabajo.php"><i class="fa fa-file-o fa-fw"></i> Nuevo Trabajo</a>
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
                                                $sql = 'select count(*)
                                                        from califiacion as c inner join materia as m on m.idmateria = c.idmateria
                                                        where m.idprofesor = "' . $_SESSION['user'] . '" AND c.califiacion = "P";';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r($row[0]);
                                                }

                                            ?></div>
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
                                                $sql = 'select count(*)
                                                        from califiacion as c inner join materia as m on m.idmateria = c.idmateria
                                                        where m.idprofesor = "' . $_SESSION['user'] . '";';
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
                                    <div class="huge"><?php
                                                $sql = 'select count(*)
                                                        from califiacion as c inner join materia as m on m.idmateria = c.idmateria
                                                        where m.idprofesor = "' . $_SESSION['user'] . '" AND c.califiacion = "F";';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    print_r($row[0]);
                                                }

                                            ?></div>
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
                            <i class="fa fa-files-o fa-fw"></i> Trabajos para Evaluar

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id='trabajosE' class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Materia</th>
                                                    <th>Archivo</th>
                                                    <th>Alumno</th>
                                                    <th>Evaluacion</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $dir = '../trabajos';
                                                $sql = 'select m.nombre, c.idalumno, c.archivo, c.fecha, c.califiacion, c.idtrabajo, m.idmateria
                                                        from califiacion as c inner join materia as m on m.idmateria = c.idmateria
                                                        where m.idprofesor = "' . $_SESSION['user'] . '";';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    #print_r($row);
                                                    print_r("<tr class='$row[6]'>
                                                    <td>$row[0]</td>
                                                    <td>
                                                    <a href='$dir/$row[2]'>$row[2]</a>
                                                    </td>
                                                    <td>$row[1]</td>
                                                    <td>$row[4]</td>
                                                    <td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal' data-whatever='$row[5]' data-alumno='$row[1]'>Evaluar</button></td>
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
                                                              <input name="ida" type="hidden" class="form-control" id="alum">
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
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-files-o fa-fw"></i> Trabajos Asignados

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id='TrabajosA' class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Descripcion</th>
                                                    <th>Materia</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = 'select m.nombre, t.nombre, t.descripcion, m.idmateria
                                                        from trabajo as t inner join materia as m on m.idmateria = t.idmateria
                                                        where m.idprofesor = "' . $_SESSION['user'] . '";';
                                                $result = mysqli_query($db,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    #print_r($row);
                                                    print_r("<tr class='$row[3]'>
                                                    <td>$row[1]</td>
                                                    <td>$row[2]</td>
                                                    <td>$row[0]</td>
                                                    ");
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
                                                            <select id="emrf" name="calif" class="form-control">
                                                                <option value="F">F</option>
                                                                <option value="R">R</option>
                                                                <option value="M">M</option>
                                                                <option value="E">E</option>
                                                            </select>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="message-text" class="control-label">Comentarios adicionales:</label>
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
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        
                        <!-- /.panel-body -->
                    </div>
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
                                <span id='todos' href='' class='list-group-item' onclick='filtroMateria("todos")' style='cursor: pointer;'>
                                                    <i class='fa fa-comment fa-fw'></i> Todas
                                                </span>
                                <?php
                                    $sql = 'select m.nombre, m.idmateria
                                            from materia as m
                                            where m.idprofesor = "' . $_SESSION['user'] . '";';
                                    $result = mysqli_query($db,$sql);
                                    $ids = [];
                                    $count = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        $ids[$count] = $row[1];
                                        $count++;
                                        #print_r($row);
                                        print_r("<span id='$row[1]' href='' class='list-group-item' onclick='filtroMateria($row[1])' style='cursor: pointer;'>
                                                    <i class='fa fa-comment fa-fw'></i> $row[0]
                                                </span>");
                                    }
                                    print_r("<script>
                                                function filtroMateria (id) {");
                                    foreach ($ids as $id) {
                                        print_r("if (id === 'todos') $('.$id').show();
                                                else if ($id !== id) $('.$id').hide();
                                                else $('.$id').show();");
                                    }
                                                    
                                    print_r("}
                                            </script>")
                                ?>
                                
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                             
                    <?php
                    $sql = 'select m.nombre, m.idmateria
                            from materia as m
                            where m.idprofesor = "' . $_SESSION['user'] . '";';
                    $result = mysqli_query($db,$sql);
                    while ($row = mysqli_fetch_array($result)) {
                        #print_r($row);
                        print_r("<div class='panel panel-default $row[1]'>
                        <div class='panel-heading'>
                            <i class='fa fa-bell fa-fw'></i> $row[0] - Resumen de calificaciones
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
                            <div class='list-group'>");
                        
                            $sql2 = 'select c.califiacion, count(c.califiacion) 
                                    from califiacion as c 
                                    inner join materia as m on c.idmateria = m.idmateria 
                                    where m.idprofesor = "' . $_SESSION['user'] . '" AND m.nombre = "'.$row[0].'"
                                    group by c.califiacion;';
                            $result2 = mysqli_query($db,$sql2);
                            while ($row2 = mysqli_fetch_array($result2)) {
                                #print_r($row2);
                                if ($row2[1] !== "0") print_r("<a href='#' class='list-group-item'>
                                    <i class='fa fa-comment fa-fw'></i> $row2[0]
                                    <span id='$row[0]"."$row2[0]' class='pull-right text-muted small'>$row2[1]</em>
                                    </span>
                                </a>");}
                                
                            print_r("</div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>" );
                        
                        print_r("<canvas id='$row[0]' width='50' height='50' class='$row[1]'></canvas>
                        <script>
                        var E = 0;
                        var M = 0;
                        var R = 0;
                        var F = 0;
                        var ctx = document.getElementById('$row[0]');
                        if (document.getElementById('$row[0]"."E')) E = document.getElementById('$row[0]"."E').innerHTML;
                        if (document.getElementById('$row[0]"."M')) M = document.getElementById('$row[0]"."M').innerHTML;
                        if (document.getElementById('$row[0]"."R')) R = document.getElementById('$row[0]"."R').innerHTML;
                        if (document.getElementById('$row[0]"."F')) F = document.getElementById('$row[0]"."F').innerHTML;
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['E', 'M', 'R', 'F'],
                                datasets: [{
                                    label: '$row[0]',
                                    data: [E, M, R, F],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255,99,132,1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>");
                        
                    }
                    ?>
                                                            
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
          var alu = button.data('alumno')
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Evaluacion trabajo: ' + recipient)
          modal.find('#recipient-name').val(recipient)
          modal.find('#alum').val(alu)
        })
    </script>

</body>

</html>
