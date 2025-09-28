<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../dist/img/logo.png">

    <title>Fanamarinam-pahavelomana</title>
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
            height: 100vh;
            width: 30vw;
            background-image: url("../../dist/img/copie2.jpg");
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
            height: 3.5vw;
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
            margin-bottom: 30px;
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
          <h2 class="text-center">Taratasy fenoina hakàna <span>Fanamarinam-pahavelomana</span></h2>
          <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
            <?php endif; ?>
          <form method="post" action="<?=base_url('Vie/affichage_certificat_vie')?>">
              <label for="nom">Anarana</label><br>
                <input type="text" class="form-control" name="nom" required value="<?= old('nom') ?>"><br>

              <label for="prenom">Fanampiny</label><br>
                <input type="text" class="form-control" name="prenom" value="<?= old('prenom') ?>"><br>

              <label for="cin">N° karapanondro (raha feno taona) </label><br>
                <input type="text" class="form-control" name="cin" value="<?= old('cin') ?>"><br>

              <label for="numeroCopie">N° kopia (raha tsy ampy taona)</label><br>
                <input type="text" class="form-control" name="numeroCopie" value="<?= old('numeroCopie') ?>"><br>
              <div>
                <button type="submit">Vita ny famenoana</button>
              </div>
          </form>
        </div>
    </div>
</body>
</html>