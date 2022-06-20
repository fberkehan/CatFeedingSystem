<?php 

$kediID = $_POST["id"];
$kediAdi=$_POST["isim"];
$kediBagis = $_POST["eskibagis"];

 $yapilanBagis = $_POST["kediBagisi"];
 $kediToplamBagis = $kediBagis + $yapilanBagis;

 $servername = "localhost";
 $username = "ROOT";
 $password = "ROOT";
 $dbname = "ROOT";
 
 
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn) {
   die("Bağlantı hatası: " . mysqli_connect_error());
 }
 $sql = "UPDATE kedi SET kediDonate = $kediToplamBagis WHERE id = $kediID";
 
 if (mysqli_query($conn, $sql)) {
 } else {
   echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);
  

 header("Location: https://localhost");



?>