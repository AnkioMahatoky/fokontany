<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fanoratana anarana</title>
    <link rel="icon" type="image/png" href="../../dist/img/logo.png">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('local/css/Inscription.css') ?>">
</head>
<body class="hold-transition">

<!-- <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-8 col-lg-6"> <!-- élargi le formulaire 
        <?php if(session()->getFlashdata('success')): ?>
            <p class="text-success"><?= session()->getFlashdata('success') ?></p>
        <?php endif; ?>

        <form action="<?= base_url('adminInscription/submit') ?>" method="post">
            <div class="card card-info shadow-lg">
                <div class="card-header text-center">
                    <h2 class="">Inscription</h2>
                </div>
                <div class="card-body p-5"> <!-- p-5 = padding pour plus de hauteur 
                    
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Nom" name="nom" required>
                    </div>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Téléphone" name="telephone" required>
                    </div>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control form-control-lg" placeholder="Mot de passe" name="mot_de_passe" required>
                    </div>

                    <p class="text-center mb-3">
                        Vous êtes déjà inscrit ? 
                        <a href="<?= base_url('/adminConnexion') ?>">Se connecter</a>
                    </p>

                    <button type="submit" class="btn btn-lg btn-block text-white fw-bold" style="background-color:#17a2b8">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
</div> -->

<div class="container">
    <div class="left">
        <img src="<?= base_url('local/image/SaryAdmin-Photoroom.png')?>" class="image" alt="Illustration inscription">
    </div>

    <div class="text">
        <h1>Izaho ilay <br>Sefom-pokontany</h1>
        <p>Eto izahay hanampy anao</p>
    </div>

    <div class="rigth">
        <img src="<?= base_url('local/image/LogoGAsy-Photoroom.png')?>" class="image2" alt="Logo">
        <p class="desc">Fanokafana Kaonty</p>

        <?php if(session()->getFlashdata('success')): ?>
            <p class="text-success text-center"><?= session()->getFlashdata('success') ?></p>
        <?php endif; ?>

        <form action="<?= base_url('adminInscription/submit') ?>" method="post">
            <div class="input-group mb-3">
                <input type="text" name="nom" class="form-control" placeholder="Anarana fiantso" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="text" name="telephone" class="form-control" placeholder="Laharana finday" pattern="\d{10}" required minlength="10" maxlength="10" oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="password" name="mot_de_passe" class="form-control" placeholder="Teny miafina" required minlength="8" oninvalid="this.setCustomValidity('Litera 8 farafahakeliny')"
  oninput="this.setCustomValidity('')">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="password" name="confirm_mdp" class="form-control" placeholder="Amarino ny Teny miafina" required minlength="8" oninvalid="this.setCustomValidity('Litera 8 farafahakeliny')"
  oninput="this.setCustomValidity('')">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="btn-container">
                <div class="btn-major">
                    <button type="submit" class="btn btn-lg btn-block text-white fs-6">Hanoratra anarana</button>
                </div>
                <div class="btn-minor">
                    <a href="<?= base_url('/adminConnexion') ?>" >Efa manana <br> kaonty</a>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>
