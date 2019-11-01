<div id="page-wrapper" style="background:#20262e; border: 0px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color:#fff;" class="page-header"><?php echo $subtitulo ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background:#20262e; color:#fff;">
                        <?php echo $subtitulo ?>
                        </div>
                        <div class="panel-body" style="background:#20262e">
                            <div class="row">
                                <div class="col-lg-12">
                                <h2 style="color:#fff;">Bem vindo ao sistema <?php echo $this->session->userdata('userlogado')->nome ?>! </h2>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>