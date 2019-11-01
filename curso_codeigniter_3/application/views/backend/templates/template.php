<style>
    #formata-nav-teste {
        margin-bottom: 0;
        border: 0px;
        background-color: rgba(32, 38, 46, 0.2);
        margin-bottom: -30px;
    }
    .passar-mouse:hover{
        top: -4px;
        background-color: rgba(32, 38, 46, 0.2) !important;
        text-shadow: 0 0 10px #33a5b7, 0 0 20px #33a5b7, 0 0 30px #33a5b7, 0 0 40px #33a5b7, 0 0 70px #33a5b7, 0 0 80px #33a5b7, 0 0 100px #33a5b7, 0 0 150px #ff00de;
    }
    .passar-mouse:visited{
        top: -4px;
        background-color: rgba(35, 38, 46, 0.2) !important;
        text-shadow: 0 0 10px #33a5b7, 0 0 20px #33a5b7, 0 0 30px #33a5b7, 0 0 40px #33a5b7, 0 0 70px #33a5b7, 0 0 80px #33a5b7, 0 0 100px #33a5b7, 0 0 150px #ff00de !important;
    }
</style>

<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" id="formata-nav-teste" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: #DFDFDF;" href="<?php echo base_url('admin') ?>">Painel de Controle</a>
            </div>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="background:#20262e; border:0px">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li style="border:0px;">
                            <a class="passar-mouse" style="color: #33a5b7;  " href="<?php echo base_url('admin/categoria') ?>"><i class="fa fa-sitemap fa-fw"></i> Categorias</a>
                        </li>
                        <li style="border:0px;">
                            <a class="passar-mouse" style="color: #33a5b7;" href="<?php echo base_url('admin/publicacao') ?>"><i class="fa fa-edit fa-fw"></i> Postagens</a>
                        </li>
                        <li style="border:0px;">
                            <a class="passar-mouse" style="color: #33a5b7;" href="<?php echo base_url('admin/usuarios') ?>"><i class="fa fa-wrench fa-fw"></i> Usuários</a>
                        </li>
                        <li style="border:0px;">
                            <a class="passar-mouse" style="color: #33a5b7;" href="<?php echo base_url('admin/usuarios/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair do Sistema</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
