<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../dist/img/logo.png">

    <title>Fisoratana anarana</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration: none;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .tongasoa{
            height: 100vh;
            width: 50vw;
            background-image: url("../../dist/img/izyroa.png");
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
            width: 50vw;
        }
        input{
            height: 3.5vw;
            width: 30vw;
            background: #f5f5f5;
            border-radius: 10px;
            border: none;
            padding: 0 15px;
        }
        button{
            color:white;
            background: black;
            border-radius: 15px;
            width: 30vw;
            height: 3.3vw;
            border: none;
            cursor: pointer;
        }
        h2,a{
            color: #818181bd;
        }
        h2{
            font-weight: 500;
        }
        h1,h2,input,button{
            margin-bottom: 18px;
        }
        span{
            height: 0.1vw;
            width: 8vw;
            margin-top: 5px;
            background: black;
        }
        p{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="tongasoa">
        </div>
        <div class="form">
            <h1>Fanoratana anarana</h1>
            <h2>Hamorona kaonty</h2>
            <form action="inscription" method="POST">
                <label for="">Solon'anarana</label><br>
                <input type="text" name="nom" title="Tsy maintsy fenoina ity!" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')"><br>
                <label for="">Laharana finday</label><br>
                <input type="text" name="tel" pattern="\d{10}" minlength="10" maxlength="10" required oninvalid="this.setCustomValidity('Nomerao marina ahafahanay mifandray aminao')"
  oninput="this.setCustomValidity('')"><br>
                <label for="">Teny miafina</label><br>
                <input type="password" name="mdp" required minlength="8" oninvalid="this.setCustomValidity('Litera 8 farafahakeliny')"
  oninput="this.setCustomValidity('')"><br>
                <label for="">Amarino ny teny miafina</label><br>
                <input type="password" name="cmdp" required minlength="8" oninvalid="this.setCustomValidity('Litera 8 farafahakeliny')"
  oninput="this.setCustomValidity('')"><br>
                <?php if(!empty($erreur)):?>
                    <!-- <script>
                        alert("")
                    </script> -->
                    <p><?=$erreur?></p>
                <?php endif;?>
                <div>
                    <button type="submit">Hisoratra anarana</button>
                    <a href="seconnecter">Hiditra</a>
                    <span></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>