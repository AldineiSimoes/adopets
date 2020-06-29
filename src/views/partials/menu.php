<div id="wrapper" class="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navba" href="<?php $base; ?>">
            <img src="<?php echo $base; ?>/assets/image/logo1.png" alt="Logo Apta" width="220"></a>
    </div>
    <!-- /.navbar-header -->

        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
        <ul class="nav navbar-top-links navbar-left">
            <!-- <ul class="navbar-nav mr-auto"> -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $base; ?>">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>/realizado">Realizado</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Vendas <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li><a href="<?php echo $base; ?>/vendas">Conferencia manual</a></li>
                        <li><a href="#">Conferencia automatica</a></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recebimento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Relatórios</a>
                </li>
            </ul>
        <!-- </div> -->


    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-gear fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-gears fa-fw"></i> Configurações
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/empresas">
                        <div>
                            <i class="fa fa-list-alt fa-fw"></i> Empresas
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/usuario">
                        <div>
                            <i class="fa fa-users fa-fw"></i> Usuários
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/taxas">
                        <div>
                            <i class="fa fa-sort-numeric-asc fa-fw"></i> Cadastro de taxas
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/importacoes">
                        <div>
                            <i class="fa fa-files-o fa-fw"></i> Importações
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>< <?php echo $user->email; ?> ></li>
                <li class="divider"></li>
                <li><a href="<?php echo $base; ?>/usuario"><i class="fa fa-user fa-fw"></i> Dados do usuario</a>
                </li>
                <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                </li> -->
                <li class="divider"></li>
                <li>
                    <a href="<?php echo $base; ?>/logout">
                        <i class="fa fa-sign-out fa-fw"></i> Sair
                    </a>
                </li>

            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

</nav>
