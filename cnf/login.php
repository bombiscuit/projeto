<?php
require 'conection.php';


if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    echo "Vamos fazer login do email: $email";
    echo "<br>";
    echo "A senha digitada foi: $senha";
    
    $dados = $connection->query("SELECT * FROM usuarios WHERE email_usuario='$email' AND senha='$senha'");
    
    while($row = $dados->fetch_assoc()){
        session_start();
        
        $_SESSION['Login'] = $row;
    }
    
    ?>
    
    <meta http-equiv="refresh" content="0;../index.php">
    
    <?php
}