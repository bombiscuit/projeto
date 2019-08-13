<div class="col-md-8 col-sm-12" id="coment">
    <form action="">
        <div class="form-group">
            <textarea name="" id="" cols="30" rows="10" class="form-control" disabled></textarea>
        </div>
    </form>
</div>
<!--O link está com GET com o elemento "pagina"-->
    
    <?php
        if(isset($_GET['pagina'])){
            echo "url da página: ".$pagina = $_GET['pagina'];
            echo "<br><br>";
            
            switch($pagina){
                case $pagina: include 'parts/'.$pagina.'.php';break;
                default: include 'parts/Home.php';
            }
        }else{
            include 'parts/Home.php';
        }
    ?>
