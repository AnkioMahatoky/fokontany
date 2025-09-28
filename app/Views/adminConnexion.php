<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fidirana</title>
    <link rel="stylesheet" href="<?= base_url('local/css/SeConnecter.css') ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" type="image/png" href="../../dist/img/logo.png">

</head>
<body class="hold-transition">
    
    <div class="container">
        <div class="left">
            <img src="<?= base_url('local/image/SaryAdmin-Photoroom.png')?>" class="image" alt="Illustration log in">
        </div>

        <div class="text">
            <h1>Izaho ilay <br>Sefom-pokontany</h1>
            <p>Eto izahay hanampy anao</p>
        </div>

        <div class="rigth">
            <img src="<?= base_url('local/image/LogoGAsy-Photoroom.png')?>" class="image2" alt="Logo">
            <p class="desc">Hiditra amin'ny kaonty</p>

            <form action="adminConnexion" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="nom" class="form-control" placeholder="Anarana" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="mot_de_passe" class="form-control" placeholder="Teny miafina" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <?php if(session()->getFlashdata('error')): ?>
                    <p class="text-danger text-center"><?= session()->getFlashdata('error') ?></p>
                <?php endif; ?>

                <div class="btn-container">
                    <div class="btn-major">
                        <button class="btn btn-lg  text-white" type="submit">Hiditra</button>
                    </div>
                    <div class="btn-minor">
                        <a href="<?= base_url('/adminInscription') ?>">Hisoratra anarana</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
