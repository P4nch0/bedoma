<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bienvenido a Bedöma</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="loginForm"  action = "./controller/controller.php" method = "post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Matricula" name="id" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Iniciar Sesión">
                            </fieldset>
                        </form>
                        <br/>
                        <div class="row">
                            <div class="col-md-2 col-md-offset-2">
                        <a href="view/alumno.php">Nuevo Alumno</a>
                            </div>
                            <div class="col-md-2 col-md-offset-2">
                        <a href="view/profesor.php">Nuevo Profesor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
