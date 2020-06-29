<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Apta Brasil Soluções em Tecnologia</title>
    <link href="<?php echo $base; ?>/../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base; ?>/assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo $base; ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $base; ?>/../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row ">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <img src="<?php echo $base; ?>/assets/image/logo1.png" alt="">
                    <?php if(!empty($flash)): ?>
                        <div class="flash">
                            <?php echo $flash; ?>  
                        </div>
                    <?php endif; ?>
                    <div class="panel-heading">
                        <h3 class="panel-title">Por favor digite seu login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo $base; ?>/login" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Lembre-Me
                                    </label>
                                </div>
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo $base; ?>/../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $base; ?>/../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $base; ?>/../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $base; ?>/assets/js/sb-admin-2.js"></script>

</body>

</html>
