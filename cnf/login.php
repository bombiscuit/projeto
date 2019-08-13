<?php
require 'connection.php';


if(!empty($_POST['email_cadastrado'])){
    
    $email = $_POST['email_cadastrado'];
    $senha = $_POST['senha_cadastrada'];
    
    "Vamos fazer login do email: $email";
    "<br>";
    "A senha digitada foi: $senha";
    
    $dados = $connection->query("SELECT * FROM usuarios WHERE email_usuario='$email' AND senha_usuario='$senha'");
    
    while($row = $dados->fetch_assoc()){        
        $_SESSION['Login'] = $row;
    }
    
    ?>
    
<!--    <meta http-equiv="refresh" content="0;index.php">-->
    
    <?php
}