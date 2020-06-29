<?php 
$render('header'); 
?>
<div class="container">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Dados da empresa<small></small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $base; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dados da empresa</li>
            </ol>
        </section>
        <section class="content container-fluid">
            <div class="row">
                <div class="box box-info">
                    <form class="form-horizontal" method="post" action="<?php echo $base ?>/save">
                        <input type="hidden" id="id" name="id" value="<?=isset($cli['ID'])?$cli['ID']:0; ?>" >
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nome" class="col-sm-1 control-label">Nome</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" 
                                    value="<?=isset($cli['NOME'])?$cli['NOME']:''; ?>" 
                                    >
                                </div>
                                <label for="data" class="col-sm-2 control-label">Data (Nasc./Abert.)</label>

                                <div class="col-sm-2">
                                    <input type="date" class="form-control" id="data" placeholder="Data (Nasc./Abert.)" name="dtnasc"
                                    value="<?=isset($cli['DT_NASC'])?$cli['DT_NASC']:''; ?>" 
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cpf" class="col-sm-1 control-label">CPF/CNPJ</label>

                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="cpf" placeholder="CPF/CNPJ" name="cpf"
                                    value="<?=isset($cli['CPF'])?$cli['CPF']:''; ?>" 
                                    >
                                </div>
                                <label for="rg" class="col-sm-1 control-label">R.G./I.E.</label>

                                <div class="col-sm-3">
                                    <input type="rg" class="form-control" id="rg" placeholder="RG/IE" name="rg"
                                    value="<?=isset($cli['RG'])?$cli['RG']:''; ?>" 
                                    >
                                </div>
                                <label for="telefone" class="col-sm-1 control-label">Telefone</label>

                                <div class="col-sm-3">
                                    <input type="tel" class="form-control" id="telefone" placeholder="" name="telefone" 
                                    value="<?=isset($cli['TELEFONE'])?$cli['TELEFONE']:''; ?>" 
                                    >
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="cep" class="col-sm-1 control-label">Cep</label>

                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="cep" placeholder="CEP" name="cep"
                                    value="<?=isset($endereco['CEP'])?$endereco['CEP']:''; ?>" 
                                    >
                                </div>
                                <label for="endereco" class="col-sm-1 control-label">Endereço</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco"
                                    value="<?=isset($endereco['ENDERECO'])?$endereco['ENDERECO']:''; ?>" 
                                    >
                                </div>
                                <label for="numero" class="col-sm-1 control-label">Número</label>

                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="numero" placeholder="Número" name="numero"
                                    value="<?=isset($endereco['NUMERO'])?$endereco['NUMERO']:''; ?>" 
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="complemento" class="col-sm-1 control-label">Complemento</label>

                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="complemento" placeholder="Complemento" name="complemento"
                                    value="<?=isset($endereco['COMPLEMENTO'])?$endereco['COMPLEMENTO']:''; ?>" 
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bairro" class="col-sm-1 control-label">Bairro</label>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro"
                                    value="<?=isset($endereco['BAIRRO'])?$endereco['BAIRRO']:''; ?>" 
                                    >
                                </div>
                                <label for="cidade" class="col-sm-1 control-label">Cidade</label>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade"
                                    value="<?=isset($endereco['CIDADE'])?$endereco['CIDADE']:''; ?>" 
                                    >
                                </div>
                                <label for="uf" class="col-sm-1 control-label">UF</label>

                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="uf" placeholder="UF" name="uf"
                                    value="<?=isset($endereco['UF'])?$endereco['UF']:''; ?>" 
                                    >
                                </div>
                                <div class="form-group">

                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-1 control-label">E-mail</label>

                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email"
                                    value="<?=isset($endereco['EMAIL'])?$endereco['EMAIL']:''; ?>" 
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pv" class="col-sm-1 control-label">PV</label>

                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="pv" placeholder="PV" name="pv"
                                    value="<?=isset($dados['pv'])?$dados['pv']:''; ?>" 
                                    >
                                </div>
                                <label for="token" class="col-sm-1 control-label">token</label>

                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="token" placeholder="token" name="token"
                                    value="<?=isset($dados['token'])?$dados['token']:''; ?>" 
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