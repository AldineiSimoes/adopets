
<?php $render('headerCalendario',['user' => $user]);  ?>

<div class="container-fluid">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Calendário
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo $base; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Calendário</li>
            </ol>
        </section>
        <section class="content container-fluid">
            <div id='calendar' class="col-sm-7"></div>
            <div class="col-sm-3">Teste</div>
            <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detalhes do evento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <dl class="row">
                                <dt class="col-sm-3">Id do evento</dt>
                                <dd class="col-sm-9" id="id"></dd>
                                <dt class="col-sm-3">Titulo</dt>
                                <dd class="col-sm-9" id="title"></dd>
                                <dt class="col-sm-3">Data inicio</dt>
                                <dd class="col-sm-9" id="start"></dd>
                                <dt class="col-sm-3">Data fim</dt>
                                <dd class="col-sm-9" id="end"></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $render('footer'); ?>
    </div>
</div>