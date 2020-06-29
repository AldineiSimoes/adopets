<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Locação de Imóveis">
    <meta name="author" content="Apta Brasil Soluções em Tecnologia">

    <title>Apta Administração de cartões</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $base; ?>/../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $base; ?>/../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $base; ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo $base; ?>/../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $base; ?>/../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='<?php echo $base; ?>/assets/css/packages/core/main.css' rel='stylesheet' />
    <link href='<?php echo $base; ?>/assets/css/packages/daygrid/main.css' rel='stylesheet' />
    <link href='<?php echo $base; ?>/assets/css/packages/timegrid/main.css' rel='stylesheet' />
    <link href='<?php echo $base; ?>/assets/css/style.css' rel='stylesheet' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='<?php echo $base; ?>/assets/js/packages/core/main.js'></script>
    <script src='<?php echo $base; ?>/assets/js/packages/core/pt-br.js'></script>
    <script src='<?php echo $base; ?>/assets/js/packages/interaction/main.js'></script>
    <script src='<?php echo $base; ?>/assets/js/packages/daygrid/main.js'></script>
    <script src='<?php echo $base; ?>/assets/js/packages/timegrid/main.js'></script>
    <script src='<?php echo $base; ?>/assets/js/calendario.js'></script>

</head>

<body>

<?php $render('menu',['user' => $user]);  ?>
