

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

    <a href="index.php">
        <div class="kediekle">HOME</div>
        </a>
        

        <!-- BURASI SLIDER BAŞLANGICI -->
        <div class="sliderBu" style="padding: 20px;">
        <form action="process.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Kedinizin İsmi</label>
            <input name="kediAdi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kimmiş kedicik" required>
            <small id="emailHelp" class="form-text text-muted">Umarız aç kedinizi doyurursunuz </small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Kediniz Hakkında Açıklama</label>
              <textarea name="kediAciklama" maxlength="300" class="form-control" id="exampleFormControlTextarea1" rows="3" style="max-height: 202px;min-height: 202px;height: 202px;" placeholder="Kediniz Hakkında Ne Yapabiliriz?" required></textarea>
              <input type="file" name="kediResim" class="form-control" id="customFile">
            </div>

         


            <button  type="submit" class="btn btn-primary">Kedimi Besle</button>
      </form>
        </div>
        <!-- BURASI SLIDER BAŞLANGICI -->
    </div>

</body>

</html>