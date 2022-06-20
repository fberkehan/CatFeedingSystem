<?php

$baglanti = new mysqli("localhost", "root", "root", "root");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$sorgu = $baglanti->query("SELECT * FROM kedi");



?>



<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Mama Destek Sistemi</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Indie+Flower&family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src='main.js'></script>
</head>

<body>


    <div id="yanpanel" class="yanpanel" onclick="bilgileriGoster()">
        <div id="detay" style="float: left;max-width: 50vw;display:none;color:white;">
        <h1 style="font-family: Dancing Script;font-size: 60x;">MDS
            <p style="font-family: Indie Flower;font-size: 30px;">Mama Destek Sistemi</p>
        </h1>
            <h1>Furkan Berkehan</h1>
            <p>CAT</p>
        </div>
        <img class="pence" src="pence.svg">
    </div>

    <div class="anapanel">
        
        <a href="yukle.php">
        <div class="kediekle">+</div>
        </a>

        <!-- BURASI SLIDER BAŞLANGICI -->
        <?php 
        
        
        
        
while($row = $sorgu->fetch_assoc()) {
  


$kediDondur[] = $row;

    
  

}

echo '<div class="sliderBu">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">';


    echo '<div class="carousel-item active">
    <img class="d-block w-100" src="';
    
    echo $kediDondur[0]["kediResim"];
    
    echo '" alt="First slide">
    <h2 style="padding:26px;">'.$kediDondur[0]["kediName"].'</h2>
    <p style="padding:26px;">'.$kediDondur[0]["kediDesc"].'</p>
    <p style="padding:26px;">Yapılan Bağış:'.$kediDondur[0]["kediDonate"].'TL</p>
    <a href="mamagonder.php?id='.$kediDondur[0]["id"].'&isim='.$kediDondur[0]["kediName"].'&kediBagis='.$kediDondur[0]["kediDonate"].'"><button type="button" class="btn btn-danger"  style="margin-bottom:30px;">Mama Gönder</button></a>

    </div>';

    for ($verisayisi=1; $verisayisi < count($kediDondur); $verisayisi++) { 
     
        echo '<div class="carousel-item">
        <img class="d-block w-100" src="';

       
        echo $kediDondur[$verisayisi]["kediResim"]; 

               
        echo '"alt="First slide">
        <h2 style="padding:26px;">'.$kediDondur[$verisayisi]["kediName"].'</h2>
        <p style="padding:26px;">'.$kediDondur[$verisayisi]["kediDesc"].'</p>

        <p style="padding:26px;">Yapılan Bağış:'.$kediDondur[$verisayisi]["kediDonate"].'TL</p>
        <a href="mamagonder.php?id='.$kediDondur[$verisayisi]["id"].'&isim='.$kediDondur[$verisayisi]["kediName"].'&kediBagis='.$kediDondur[$verisayisi]["kediDonate"].'"><button type="button" class="btn btn-danger" style="margin-bottom:30px;">Mama Gönder</button></a>

    </div>';
    }

    echo '</div><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</div>';



?>


        <!-- FOR DONUGUSU<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->


   
        



    </div>
    
        
        <!-- BURASI SLIDER BAŞLANGICI -->
    </div>

</body>

</html>