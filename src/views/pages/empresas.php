<?php 
$render('header',['user' => $user]); 
?>
<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Empresas<small></small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $base; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Empresas</li>
            </ol>
        </section>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel ">
                        <div class="box-tools">
                            <a href="<?php echo $base.'/empresa/add'; ?>" class="btn btn-success">Adicionar</a>
                        </div>
                        <?php if(!empty($flash)): ?>
                            <div class="flash">
                                <?php echo $flash; ?>  
                            </div>
                        <?php endif; ?>
                        <div class="panel-heading">
                            <div class="row">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>EMPRESA</th>
                                        <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data as $item): ?>
                                            <tr>
                                                <td><?php echo $item['ID']; ?></td>
                                                <td><?php echo $item['NOME']; ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                <a href="<?php echo $base.'/empresa/edit/'.$item['id']; ?>" class="editar">
                                                <img src="<?php echo $base ?>/assets/image/edit.png" alt="Alterar" title="Alterar"></a>
                                                <a href="<?php echo $base.'/empresa/del/'.$item['id']; ?>" 
                                                onclick="return confirm('Excluir usuário?')"
                                                class="<?php echo ($item['product_count']!='0')?'disabled':''; ?>">
                                                <img src="<?php echo $base ?>/assets/image/delete.png" alt="Excluir" title="Excluir"></a>
                                                        </div>
                                                </td>
                                            </tr>
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
        </section>
        <section class="content">
        </section>
        <?php $render('footer'); ?>
    </div>
</div>