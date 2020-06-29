<?php 
$render('header',['user' => $user]); 
?>
<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Dados do Usuário<small></small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $base; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dados do Usuário</li>
            </ol>
        </section>
        <section class="content container-fluid">
            <div class="row">
                <div class="box box-info">
                    <form class="form-horizontal" method="post" action="<?php echo $base ?>/usuario/save">
                        <input type="hidden" id="id" name="id" value="<?=isset($dados['id'])?$dados['id']:0; ?>" >
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nome" class="col-sm-1 control-label">E-mail</label>

                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="email" placeholder="Digite o e-mail" name="email" 
                                    value="<?=isset($dados['email'])?$dados['email']:''; ?>" 
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Password" class="col-sm-1 control-label">Senha</label>

                                <div class="col-sm-3">
                                    <input type="password" class="form-control" id="password" 
                                        placeholder="Digite a senha" name="password"
                                        value="" 
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="content">
        </section>
        <?php $render('footer'); ?>
    </div>
</div>