<?php 
$render('header',['user' => $user]); 
?>
<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Vendas<small></small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $base; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Vendas</li>
            </ol>
        </section>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel ">
                        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastroTaxa">
                            Novo
                        </button> -->
                        <?php if(!empty($flash)): ?>
                            <div class="alert alert-danger flash" role="alert" >
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $flash; ?>  
                            </div>
                        <?php endif; ?>
                        <div class="panel-heading">
                            <div class="row">
                                <form action="<?php echo $base; ?>/confere" method="post">
                                    <input type="submit" name="desfazer" value="Desfazer" 
                                            class="btn  btn-danger btn-xs" >
                                    <input type="submit" name="conferir" value="Conferir" 
                                            class="btn  btn-success btn-xs" >
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th style="width: 30px;"></th>
                                            <th style="width: 50px;">Status</th>
                                            <th style="width: 90px;">Data</th>
                                            <th style="width: 200px;">Estabelecimento</th>
                                            <th style="width: 75px;">Valor bruto</th>
                                            <th style="width: 75px;">Taxa da operadora</th>
                                            <th style="width: 100px;">Operadora</th>
                                            <th style="width: 100px;">Bandeira</th>
                                            <th style="width: 150px;">Tipo</th>
                                            <th style="width: 75px;">Total de parcelas</th>
                                            <th style="width: 80px;">NSU</th>
                                            <th style="width: 100px;">Autorizaçao</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($dados as $item): ?>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="chec[]" value="<?php echo $item['id']; ?>">
                                                    </td>
                                                    <td>
                                                        <?php if ($item['status']==1): ?>
                                                            <img class="statusVenda" src="<?php echo $base; ?>/assets/image/Botoes_5122_accepted_48.png" alt="ok">
                                                        <?php endif; ?>

                                                        <?php if ($item['status']==0): ?>
                                                            <img class="statusVenda" src="<?php echo $base; ?>/assets/image/Botoes_5123_cancel_48.png" alt="nok">
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo date('d/m/Y',strtotime($item['data_venda'])); ?></td>
                                                    <td><?php echo $item['EMPRESA']; ?></td>
                                                    <td><?php echo $item['valor_venda']; ?></td>
                                                    <td><?php echo $item['perc_comissao']; ?>%</td>
                                                    <td><?php echo $item['operadora']; ?></td>
                                                    <td><?php echo $item['bandeira']; ?></td>
                                                    <td><?php echo $item['forma_pagaento']; ?></td>
                                                    <td><?php echo $item['parcelas']; ?></td>
                                                    <td><?php echo $item['nsu']; ?></td>
                                                    <td><?php echo $item['codigo_autorizacao']; ?></td>
                                                </tr>

                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="cadastroTaxa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h3 class="modal-title" id="exampleModalLabel"> Cadastro de taxas </h3>
                        </div>
                        <div class="box-body">
                            <form class="form-horizontal" method="post" action="<?php echo $base; ?>/taxas/save">  
                                <input type="hidden" id="id" name="id" value="0" >
                                <div class="form-group">
                                    <label for="nome" class="col-sm-3 control-label">Inicio vigencia</label>

                                    <div class="col-sm-5">
                                        <input type="date" required="required" class="form-control" id="data" placeholder="Digite o e-mail" name="data" 
                                        value="" 
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-3 control-label">Estabelicimento</label>
                                    
                                    <div class="col-sm-5">
                                        <select name="estabelecimento" id="cbestabelecimento" class="form-control"> 
                                            <option value="0">Todos</option>
                                            <?php foreach($empresa as $op): ?>
                                                <option value="<?php echo $op['ID']; ?>"><?php echo $op['NOME']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="operadora" class="col-sm-3 control-label">Operadora</label>
                                    <div class="col-sm-5">
                                        <select name="operadora" required="required" id="cboperadora" class="form-control" >
                                            <option value=""></option>
                                            <?php foreach($operadora as $op): ?>
                                                <option value="<?php echo $op['ID']; ?>"><?php echo $op['NOME']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bandeira" required="required" class="col-sm-3 control-label">Bandeira</label>
                                    <div class="col-sm-5">
                                        <select name="bandeira" id="cbbandeira" class="form-control">
                                            <option value=""></option>
                                            <?php foreach($bandeira as $op): ?>
                                                <option value="<?php echo $op['ID']; ?>"><?php echo $op['NOME']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tipotransacao" class="col-sm-3 control-label">Tipo transação</label>
                                    <div class="col-sm-5">
                                        <select name="tipo" required="required" id="cbtipo" class="form-control">
                                            <option value=""></option>
                                            <option value="0">Beneficio</option>
                                            <option value="1">Crédito a vista</option>
                                            <option value="2">Crédito parcelado</option>
                                            <option value="3">Débito</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="taxa" class="col-sm-3 control-label">Taxa</label>

                                    <div class="col-sm-5">
                                        <input type="text" required="required" class="form-control" id="taxa" placeholder="Digite a taxa Ex: 2.5" name="taxa" 
                                        value="" 
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="parcelade" class="col-sm-3 control-label">Parcela de</label>

                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="parcelade" name="parcelade" 
                                        value="" 
                                        >
                                    </div>
                                    <label for="parcelaate" class="col-sm-3 control-label">Parcela até</label>

                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="parcelaate" name="parcelaate" 
                                        value="" 
                                        >
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success">Salvar <i class="fas fa-paper-plane-o ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
        </section>
        <?php $render('footer'); ?>
    </div>
</div>