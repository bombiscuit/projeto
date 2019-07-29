<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bon Biscuit</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" cntent="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font/icons/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" href="icones/css/all.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>
<body id="topo">
   <div class="container-fluid" style="margin:0; padding:0">
       
   <!-- incluindo as paginas do layout com php-->
    <?php 
    include'parts/menu.php';
    include'parts/sobre.php';
    include'parts/blog.php';
    ?>
    
    <!-- banner2-->
    <div class="row">
	<div id="bbiscuit" class="col-xs-12 col-md-12"  style="padding:0">
		<div id="opacity">
		<h3 class="titles"> Bon Biscuit </h3>
		<p class="subt"> Perfeitos para você! </p>
		</div>
	</div>
	</div>
	<!--fim do banner -->
	
	<?php
    include'parts/footer.php';
    ?>
	
	
<!-- js do menu-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            var nav = $('#fixed-menu');

//            alert('Hello World');
            $(window).scroll(function(){
//                alert('Hello World again!');
                if($(this).scrollTop() > 550){
                     nav.removeClass('f-nav-float');
                    nav.addClass('f-nav-fix');
//                    alert('Hello World again!');
                }else{
                    nav.removeClass('f-nav-fix');
                    nav.addClass('f-nav-float')
                }
            });
            
            $("a").on('click',function(event){
                
                if(this.hash !== ""){
                    event.preventDefault();
                    var hash = this.hash;
                    
                    $('html,body').animate({
                        scrollTop: $(hash).offset().top
                    },800, function(){
                        window.location.hash = hash;
                    });
                    
                }
                
            });
            
        
        });
    </script> 
    <!--fim do js menu -->
    </div>
    </div>
        
    <?php include_once 'parts/modalAcesso.php'?>
</body>
</html>
