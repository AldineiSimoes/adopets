<?php $render('header',['user' => $user]);  ?>
<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Importações
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $base; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">importações</li>
            </ol>
        </section>
        <section class="content container">
            <div class="row col-sm-6">
                <?php if(!empty($flash)): ?>
                    <div class="alert alert-danger flash" role="alert" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $flash; ?>  
                    </div>
                <?php endif; ?>
                <form class="form-horizontal" method="POST" action="<?php echo $base; ?>/importar" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="operadora" class="col-sm-2 control-label">Operadora</label>
                            <div class="col-sm-4">
                                <select name="operadora" id="cbooperadora" class="form-control">
                                   <option value=""></option>
                                    <?php foreach($operadora as $op): ?>
                                        <option value="<?php echo $op['ID']; ?>"><?php echo $op['NOME']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Modelo</label>
                            <div class="col-sm-4">
                                <select name="modelo" id="cboModelo" class="form-control">
                                    <option value=""></option>
                                    <option value="1">Vendas</option>
                                    <option value="2">Recebimento</option>
                                    <option value="3">Cancelamento</option>
                                    <option value="4">Chargebacks</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group content container">
                            <div class="col-sm-6">
                                <label>Arquivo</label>
                                <!--Campo para fazer o upload do arquivo com PHP-->
                                <input type="file" name="arquivo"><br><br>			
                                <input type="submit" value="Importar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="content">
        </section>
        <?php $render('footer'); ?>
    </div>
</div>