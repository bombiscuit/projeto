<!-- menu -->
<div class="row">
    <div id="banner" class="col-md-12" style="padding:0!important">
        <nav class="navbar navbar-expand-lg navbar-light site-header bg" id="fixed-menu">

            <div class="col-sm-3 col-md-2 col-lg-2 col-xl-1" style="z-index: 999!important">
                <a class="navbar-brand" href="#topo" id="topo">
                    <img src="img/logo.png" alt="Logotipo" title="Logotipo" class="img-fluid logotipo">
                </a>
            </div>

            <button class="navbar-toggler btn-menu-collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars text-warning btn-menu-collapsed"></span>
            </button>

            <div class="col-sm-12 col-md-12 col-lg-10 col-xl-11 block-menu-collapse bg" style="width:100%">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto menu">
                        <li class="nav-item active">     
                            <a class="nav-link" href="?parts=sobre" ><span>Sobre</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?parts=blogs"><span>Blogs</span></a>
                        </li>     
                        <li class="nav-item">
                            <a class="nav-link" href="?parts=contato"><span>Contato</span></a>
                        </li>
                        <li class="nav-item">
                            <?php
                                if(isset($_SESSION['Login'])){
                                    ?>
                                    <a class="nav-link" href="?Log-off">

                                        <span>Fazer Log-off</span>

                                    </a>
                                    <?php
                                }else{
                                    
                            ?>
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#cadastrar">
                            
                               <span>Acesso</span>
                            
                            </a>
                            <?php
                                }
                            ?>                            
                        </li>
                   </ul>
                   <?php
                    if(isset($_SESSION['Login'])){
                    ?>
                   <img class="photo img-fluid " src="img/usuarios/<?php echo $_SESSION['Login']['foto_usuario']?>.jpg" alt="<?php echo $_SESSION['Login']['nome_usuario']?>" title="<?php echo $_SESSION['Login']['nome_usuario']?>">
                   <?php
                    }
                    ?>
                </div>
                
            </div>
  
        </nav>
    </div>
</div>