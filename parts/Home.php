<?php
    $localFoto = 'img/foto_usuario/';
    $fotoUsuario = $_SESSION['Login']['foto_usuario'];
    $nomeUsuario = $_SESSION['Login']['nome'];
    $idadeUsuario = $_SESSION['Login']['idade'];

if(isset($_SESSION['Login'])){
    
?>
   

<div class="imagem">
    <img src="<?php echo $localFoto.$fotoUsuario?>" alt="<?php echo $nomeUsuario?>" title="<?php echo $nomeUsuario?>" class="img-fluid">
    <p>
       Nome: <?php echo $nomeUsuario?>
       <br>
        Idade: <?php echo $idadeUsuario?>
    </p>
</div>

<?php
}