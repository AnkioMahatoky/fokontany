<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../dist/img/logo.png">
    <title>Fanamarinam-pahafatesana</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration: none;
        }
        label{
            font-size: 0.8em;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .tongasoa{
            height: 110vh;
            width: 30vw;
            background-image: url("../../dist/img/deces.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        form div, .form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .form{
            width: 70vw;
        }
        input{
            height: 2.5vw;
            width: 50vw;
            background: #f5f5f5;
            border-radius: 10px;
            border: none;
            padding: 0 15px;
        }
        button{
            cursor: pointer;
            color:white;
            background: black;
            border-radius: 15px;
            width: 30vw;
            height: 3.3vw;
            border: none;
        }
        h2,a{
            color: #818181bd;
        }
        h1,h2,input,button{
            margin-bottom: 10px;
        }
        span{
          color: #CD853F;
          font-size: 1em;
          font-weight: bold;
        }
        p{
            color: red;
        }
        .retour{
            position: absolute;
            color: white;
            top: 1vw;
            left: 1vw;
        }
        .retour img{
            width: 3vw;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="tongasoa">
        </div>
        <a href="accueil" class="retour"><img src="../../dist/img/back-button.png" alt="Retour"></a>
        <div class="form">
          <h2 class="text-center">Taratasy fenoina hakàna <span>Fanamarinam-pahafatesana</span></h2>
          <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
            <?php endif; ?>
          <form method="post" action="<?=base_url('Deces/affichage_certificat_deces')?>">
              <label for="nom">Anarana</label><br>
                <input type="text" class="form-control" name="nom" required value="<?= old('nom') ?>" oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')"><br>

              <label for="prenom">Fanampiny</label><br>
                <input type="text" class="form-control" name="prenom" value="<?= old('prenom') ?>"><br>
                
                <label for="cin">Laharana karapanondro</label><br>
                    <input type="text" class="form-control" name="cin" value="<?= old('cin') ?>"><br>
                
                <label for="mpitsabo">Anaran'ny mpitsabo</label><br>
                    <input type="text" class="form-control" name="mpitsabo" value="<?= old('mpitsabo') ?>" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')"><br>

                <label for="motif">Anton'ny nahafatesany</label><br>
                    <input type="text" class="form-control" name="motif" value="<?= old('motif') ?>" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')"><br>

                <label for="date">Daty nahafatesany</label><br>
                    <input type="date" class="form-control" name="date" value="<?= old('date') ?>" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')"><br>

                <label for="heure">Ora nahafatesany</label><br>
                    <input type="text" class="form-control" name="heure" value="<?= old('heure') ?>"><br>

              <label for="numeroCopie">Laharana kopia (raha tsy ampy taona)</label><br>
                <input type="text" class="form-control" name="numeroCopie" value="<?= old('numeroCopie') ?>"><br>
              <div>
                <button type="submit">Vita ny famenoana</button>
              </div>
          </form>
        </div>
    </div>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min.css")?>">
    <title>Certificat de décés</title>
</head>
<body>
    <div>
        <h3 class=" m-5 text-center">FANAMARINAM-PAHAFATESANA</h3>
            <div class = "justify-content-center d-flex">
                <div>
                    <img src="<?=base_url('../../dist/img/copie2.jpg')?>" class="w-10 h-10 rounded-start" alt="">
                </div>
                <div class=" px-5 pb-3 border-warning w-2 h-100 border border-start-0 rounded-end">
                <form action="" method="POST"> 
                    <br>
                    <label for="" class="form-label">Anarana</label>
                    <input type="text" name="nom" class="form-control"><br>
                    <label for="" class="form-label">Fanampiny</label>
                    <input type="text" name="prenom" class="form-control"><br>
                    <label for="" class="form-label">Anaran'i mpitsabo</label>
                    <input type="text" name="nom" class="form-control"><br>
                    <label for="" class="form-label">ora nahafatesany</label>
                    <input type="text" name="prenom" class="form-control"><br>
                    <label for="" class="form-label">daty nahafatesany</label>
                    <input type="text" name="prenom" class="form-control"><br>
                   
                    <label for="" class="form-label">antony nahafatesany</label>
                    <input type="text" name="cin" class="form-control"><br>
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <button class="btn btn-outline-warning  mt-3" type="submit"><a href="affichage_certificat_deces" class="text-decoration-none text-dark">Manaraka</a></button>
                    </div>
                </form>
            </div>
        </div>
        
        <div>
        </div>
    </div>
</body>
</html> -->