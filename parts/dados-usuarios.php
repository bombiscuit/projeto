<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">
        <i class="fa fa-user"></i>
    </span>
    <a class="nav-link disabled">
        <?php
        echo $_SESSION['Login']['nome'];
        ?>
    </a>
    <a class="nav-link" href="?Log-off" title="Desconectar">
        <i class="fas fa-sign-out-alt"></i>
    </a>
</div>