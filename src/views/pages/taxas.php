<?php 
$render('header',['user' => $user]); 
?>
<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Taxas<small></small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $base; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Taxas</li>
            </ol>
        </section>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel ">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastroTaxa">
                            Novo
                        </button>
                        <!-- <div class="box-tools" data-toggle="modal" data-target="#cadastroTaxa">
                            <a href="<?php echo $base.'/taxas/add'; ?>" class="btn btn-success">Adicionar</a>
                        </div> -->
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
                                <table id="table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                        <th style="width: 120px;">Inicio vigência</th>
                                        <th style="width: 200px;">Estabelecimento</th>
                                        <th style="width: 200px;">Operadora</th>
                                        <th style="width: 100px;">Bandeira</th>
                                        <th style="width: 150px;">Tipo de transação</th>
                                        <th style="width: 50px;">Taxa</th>
                                        <th style="width: 100px;">Parcela de</th>
                                        <th style="width: 100px;">Parcela ate</th>
                                        <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($dados as $item): ?>
                                            <tr>
                                                <td><?php echo date('d/m/Y',strtotime($item['DATA_INICIO']))    ; ?></td>
                                                <td><?php echo $item['EMPRESA']; ?></td>
                                                <td><?php echo $item['OPERADORA']; ?></td>
                                                <td><?php echo $item['BANDEIRA']; ?></td>
                                                <td><?php echo $item['TIPO']; ?></td>
                                                <td><?php echo $item['TAXA']; ?></td>
                                                <td><?php echo $item['PARCELA_DE']; ?></td>
                                                <td><?php echo $item['PARCELA_ATE']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" 
                                                        data-toggle="modal"  title="Alterar"
                                                        data-target="#cadastroTaxa<?php echo $item['ID']; ?>" >
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <a href="<?php echo $base.'taxas/del/'.$item['ID']; ?>" 
                                                        onclick="return confirm('Excluir taxa?')">
                                                        <button type="button" class="btn btn-danger btn-xs"   title="Excluir">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </a>
                                            </tr>

                                            <div class="modal fade" id="cadastroTaxa<?php echo $item['ID']; ?>" tabindex="-1" 
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h3 class="modal-title" id="exampleModalLabel"> Cadastro de taxas </h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <form class="form-horizontal" method="post" 
                                                                action="<?php echo $base; ?>/taxas/save">  
                                                                <input type="hidden" id="id" name="id" value="<?=isset($item['ID'])?$item['ID']:0; ?>" >
                                                                <div class="form-group col-lg-12">
                                                                    <label for="nome" class="col-sm-3 control-label">Inicio vigencia</label>

                                                                    <div class="col-sm-5">
                                                                        <input type="date" required="required" class="form-control" id="data" placeholder="Digite o e-mail" name="data" 
                                                                        value="<?=isset($item['DATA_INICIO'])?$item['DATA_INICIO']:''; ?>" 
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-12">
                                                                    <label for="nome" class="col-sm-3 control-label">Estabelicimento</label>
                                                                    
                                                                    <div class="col-sm-5">
                                                                        <select name="estabelecimento" id="cbestabelecimento" class="form-control"> 
                                                                            <option value="0">Todos</option>
                                                                            <?php foreach($empresa as $op): ?>
                                                                                <option value="<?php echo $op['ID']; ?>"
                                                                                <?php echo ($op['ID']==$item['ID_EMP']) ? 'selected':''; ?>>
                                                                                <?php echo $op['NOME']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-12">
                                                                    <label for="operadora" class="col-sm-3 control-label">Operadora</label>
                                                                    <div class="col-sm-5">
                                                                        <select name="operadora" required="required" id="cboperadora" class="form-control" >
                                                                            <option value=""></option>
                                                                            <?php foreach($operadora as $op): ?>
                                                                                <option value="<?php echo $op['ID']; ?>"
                                                                                <?php echo ($op['ID']==$item['ID_ADQUIRENTE']) ? 'selected':''; ?>>
                                                                                <?php echo $op['NOME']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-12">
                                                                    <label for="bandeira" required="required" class="col-sm-3 control-label">Bandeira</label>
                                                                    <div class="col-sm-5">
                                                                        <select name="bandeira" id="cbbandeira" class="form-control">
                                                                            <option value=""></option>
                                                                            <?php foreach($bandeira as $op): ?>
                                                                                <option value="<?php echo $op['ID']; ?>" 
                                                                                   <?php echo ($op['ID']==$item['ID_BANDEIRA']) ? 'selected':''; ?>>
                                                                                   <?php echo $op['NOME']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-12">
                                                                    <label for="tipotransacao" class="col-sm-3 control-label">Tipo transação</label>
                                                                    <div class="col-sm-5">
                                                                        <select name="tipo" required="required" id="cbtipo" class="form-control">
                                                                            <option value=""></option>
                                                                            <option <?php echo ($item['TIPO_OPERACAO']==0) ? 'selected':''; ?> value="0">Beneficio</option>
                                                                            <option <?php echo ($item['TIPO_OPERACAO']==1) ? 'selected':''; ?> value="1">Crédito a vista</option>
                                                                            <option <?php echo ($item['TIPO_OPERACAO']==2) ? 'selected':''; ?> value="2">Crédito parcelado</option>
                                                                            <option <?php echo ($item['TIPO_OPERACAO']==3) ? 'selected':''; ?> value="3">Débito</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-12">
                                                                    <label for="taxa" class="col-sm-3 control-label">Taxa</label>

                                                                    <div class="col-sm-5">
                                                                        <input type="text" required="required" class="form-control" id="taxa" placeholder="Digite a taxa Ex: 2.5" name="taxa" 
                                                                        value="<?=isset($item['TAXA'])?$item['TAXA']:''; ?>" 
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-12">
                                                                    <label for="parcelade" class="col-sm-3 control-label">Parcela de</label>

                                                                    <div class="col-sm-2">
                                                                        <input type="number" class="form-control" id="parcelade" name="parcelade" 
                                                                        value="<?=isset($item['PARCELA_DE'])?$item['PARCELA_DE']:''; ?>" 
                                                                        >
                                                                    </div>
                                                                    <label for="parcelaate" class="col-sm-3 control-label">Parcela até</label>

                                                                    <div class="col-sm-2">
                                                                        <input type="number" class="form-control" id="parcelaate" name="parcelaate" 
                                                                        value="<?=isset($item['PARCELA_ATE'])?$item['PARCELA_ATE']:''; ?>" 
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

                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
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