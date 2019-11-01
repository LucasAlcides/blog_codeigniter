<div id="page-wrapper" style="background: #20262e">
    <div class="row">
        <div class="col-lg-12" style="color:#fff">
            <h1 class="page-header"><?php echo 'Administrar '.$subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo 'Adcionar nova '.$subtitulo ?>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php
                                if($publicado == 1){
                                    echo '<div class="alert alert-success">Uma nova categoria foi inserida!</div>';
                                }
                                    echo validation_errors('<div class="alert alert-danger">','</div>');
                                    echo form_open('admin/categoria/inserir');
                                ?>
                                <div class="form-group">
                                    <label id="txt-categoria" >Nome da Categoria</label>
                                    <input type="text" id="txt-categoria" name="txt-categoria" class="form-control" placeholder="Digite o nome da categoria...">
                                </div>
                                <button type="submit" class="btn btn-success ">Cadastrar</button>
                                <?php
                                    echo form_close();
                                ?>
                            </div>
                        </div>
                            <!-- /.row (nested) -->
                    </div>
                        <!-- /.panel-body -->
                </div>
                    <!-- /.panel -->
            </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo 'Alterar '.$subtitulo.' existente' ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                    $this->table->set_heading("Nome da Categoria","Alterar","Excluir");
                                    foreach($categorias as $categoria){
                                        $nomecat=$categoria->titulo;
                                        $alterar=anchor(base_url('admin/categoria/alterar/'.md5($categoria->id)),'<i class="fa fa-pencil fa-fw"></i>Alterar');
                                        $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$categoria->id.'"><i class="fa fa-trash fa-fw"></i> Excluir</button>';
                                        echo $modal= ' <div class="modal fade excluir-modal-'.$categoria->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h4>Deseja Excluir a Categoria '.$categoria->titulo.'?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <a type="button" class="btn btn-primary" href="'.base_url("admin/categoria/excluir/".md5($categoria->id)).'">Excluir</a>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>';
                                        $this->table->add_row($nomecat,$alterar,$excluir);
                                    }
                                    $this->table->set_template(array(
                                        'table_open' => '<table class="table table-striped">'
                                    ));
                                    echo $this->table->generate();
                                    ?>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    