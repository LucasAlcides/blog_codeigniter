<div id="page-wrapper" style="background: #20262e">
            <div class="row">
                <div class="col-lg-12" style="color:#fff; border:0px;">
                    <h1 class="page-header"><?php echo 'Administrar '.$subtitulo ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo 'Adicionar nova '.$subtitulo ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        echo validation_errors('<div class="alert alert-danger">','</div>');
                                        echo form_open('admin/publicacao/inserir');
                                    ?>
                                    <div class="form-group">
                                        <label id="select-categoria">Categoria</label>
                                            <select id="select-categoria" name="select-categoria" class="form-control">
                                                <?php foreach($categorias as $categoria){ ?>
                                                    <option value="<?php echo $categoria->id ?>"><?php echo $categoria->titulo?></option>
                                                <?php  } ?>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                            <label id="txt-titulo">Título</label>
                                            <input type="text" id="txt-titulo" name="txt-titulo" class="form-control" placeholder="Informe o Título da publicação" value="<?php echo set_value('txt-titulo') ?>">
                                    </div>
                                    <div class="form-group">
                                            <label id="txt-subtitulo">Subtítulo</label>
                                            <input type="text" id="txt-subtitulo" name="txt-subtitulo" class="form-control" placeholder="Digite o email do usuário..." value="<?php echo set_value('txt-subtitulo') ?>">
                                    </div>
                                    <div class="form-group">
                                            <label id="txt-conteudo">Conteúdo</label>
                                            <textarea name="txt-conteudo" id="txt-conteudo" class="form-control"><?php echo set_value('txt-conteudo') ?></textarea>
                                    </div>
                                    <div class="form-group">
                                            <label id="txt-data">Data</label>
                                            <input type="datetime-local" id="txt-data" name="txt-data" class="form-control" value="<?php echo set_value('txt-data') ?>">
                                    </div>
                                    <input type="hidden" name="txt-usuario" id="txt-usuario" value="<?php echo $this->session->userdata('userlogado')->id; ?>">
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <?php echo 'Alterar '.$subtitulo.' existente' ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <style>
                                    img{
                                        width: 240px;
                                    }
                                </style>
                                <?php
                                    $this->table->set_heading("Foto","Titulo","Data","Alterar","Excluir");
                                    foreach($publicacoes as $publicacao){
                                        $titulo=$publicacao->titulo;
                                        if($publicacao->img == 1){
                                            $fotopub = img("assets/frontend/img/publicacao/".md5($publicacao->id).".jpg"); 
                                        }else{
                                            $fotopub = img("assets/frontend/img/semFoto2.png");
                                        }
                                        
                                        
                                        $data= postadoem($publicacao->data);                                                             
                                        $alterar=anchor(base_url('admin/publicacao/alterar/'.md5($publicacao->id)),'<i class="fa fa-pencil fa-fw"></i>Alterar');
                                        $excluir=anchor(base_url('admin/publicacao/excluir/'.md5($publicacao->id)),'<i class="fa fa-trash fa-fw"></i>Excluir');
                                        $this->table->add_row($fotopub,$titulo,$data,$alterar,$excluir);
                                    }
                                    $this->table->set_template(array(
                                        'table_open' => '<table class="table table-striped">'
                                    ));
                                    echo $this->table->generate();
                                    echo "<div class='paginacao'>".$links_paginacao."</div>";
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
<!--
 