<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Vista/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>Vista/css/font-awesome.css">
        <title>Inicia Sesión</title>
    </head>
    <body>
        <div class="container container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12" style="margin-top: 10px">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="page-header text-center" style="margin-top: 0px;">
                                <img src="<?php echo URL_BASE; ?>Vista/img/find_user.png" alt="Usuario">
                            </div>
                            <form role="form" action="<?php echo URL_BASE; ?>session/principal" method="POST">
                                <div class="form-group">
                                    <label for="">Usuario</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="text" name="txtLogin" class="form-control" placeholder="Usuario" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Contraseña</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="password" name="txtContrasenia" class="form-control" placeholder="Contraseña" required maxlength="16">
                                    </div>
                                </div>
                                <p class="text-center">
                                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center" id="footer-text"><small>Derechos reservados &copy; 2016 </small></p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>