<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" >
                <div class="login-panel panel panel-default" style="border-radius:0px; background:#20262e">
                    <div class="panel-heading" style="background:#20262e; border: 0">
                        <h3 class="panel-title" style="color: #fff;">Login</h3>
                    </div>
                    <div class="panel-body">
                    <?php
                        echo validation_errors('<div class="alert alert-danger">','</div>');
                        echo form_open('admin/usuarios/login');
                    ?>                  
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuário" name="txt-user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="txt-senha" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Entrar</button>
                            </fieldset>
                    <?php 
                    echo form_close();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>