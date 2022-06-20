<?php 


if(isset($_FILES["kediResim"])){
    $hata = $_FILES["kediResim"]['error'];
    if($hata != NULL) {
        
    } else {
        
        $isim = $_FILES["kediResim"]['name'];
        $dosya = $_FILES["kediResim"]['tmp_name'];
        $isimDegistir = rand(1000,100000) . "-" . $_FILES["kediResim"]['name'];
        $isimTemizle = str_replace(' ','-',$isimDegistir);
        copy($dosya, '' . $isimTemizle);

    }

    
   
}else {
    
}

if ($isim==NULL) {
    $kediResim = "https://im.haberturk.com/2019/05/23/ver1558622944/2473354_810x458.jpg";
}else {
    $kediResim = $isimTemizle;
}
    
    $kediAdi = $_POST["kediAdi"];
    $kediAciklama = $_POST["kediAciklama"];
    // $kediResim = $isimTemizle;
    
    
    
    
    $servername = "localhost";
    $username = "ROOT";
    $password = "ROOT";
    $dbname = "ROOT";
    
    
    // CBağlantı Oluşturma
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Bağlantıyı kontrol etme
    if (!$conn) {
      die("Bağlantı hatası: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO `kedi` (`id`, `kediName`, `kediDesc`, `kediResim`, `kediDonate`) VALUES (NULL, '$kediAdi', '$kediAciklama', '$kediResim', '0')";
    
    if (mysqli_query($conn, $sql)) {
    } else {
      echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
     

    header("Location: http://localhost");
 
  
    ?>