<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css')?>">
    <link rel="icon" type="image/png" href="../../dist/img/logo.png">
    <title>Fampidirana mponina</title>
    <style>
      body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      .card-header, .btn{
        background-color: #e68d35ff;
        color: white;
        font-weight: bold;
      }
    </style>
</head>
<body class="bg-light py-5">

  <div class="container">
    <div class="card shadow">
      <div class="card-header text-white">
        <h4 class="mb-0">Fampidirana mponina vaovao</h4>
      </div>
      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>

      <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
      <?php endif; ?>
      <div class="card-body">
        <form action="<?= base_url('/fanampidirana/ajoutHabitant')?>" method="POST" class="row g-3">

          <div class="col-md-6">
            <label for="nom" class="form-label">Anarana</label>
            <input type="text" class="form-control" name="nom" id="nom" required value="<?= old('nom') ?>" oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')">
          </div>

          <div class="col-md-6">
            <label for="prenom" class="form-label">Fanampiny</label>
            <input type="text" class="form-control" name="prenom" id="prenom" value="<?= old('prenom') ?>">
          </div>

          <div class="col-md-6">
            <label for="cin" class="form-label">Laharana karapanondro</label>
            <input type="text" class="form-control" name="cin" id="cin" value="<?= old('cin') ?>" pattern="\d{12}" minlength="12" maxlength="12" oninvalid="this.setCustomValidity('Tsy maintsy miisa 12 ny laharana')"
  oninput="this.setCustomValidity('')">
          </div>

          <div class="col-md-6">
            <label for="num_copie" class="form-label">Laharana kopia</label>
            <input type="number" class="form-control" name="num_copie" id="num_copie" value="<?= old('num_copie') ?>" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')">
          </div>

          <div class="col-md-6">
            <label for="date_naissance" class="form-label">Daty nahaterahana</label>
            <input type="date" class="form-control" name="date_naissance" id="date_naissance" value="<?= old('date_naissance') ?>" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')">
          </div>

          <div class="col-md-6">
            <label for="lieu_naissance" class="form-label">Toerana nahaterahana</label>
            <input type="text" class="form-control" name="lieu_naissance" id="lieu_naissance" value="<?= old('lieu_naissance') ?>" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')">
          </div>

          <div class="col-md-6">
            <label for="situation_matrimoniale" class="form-label">Toe-panambadiana</label>
            <select class="form-select" name="situation_matrimoniale" id="situation_matrimoniale" value="<?= old('situation_matrimoniale') ?>" required oninvalid="this.setCustomValidity('Misafidiana amin\'ireo anaty lisitra')"
  oninput="this.setCustomValidity('')">
              <option value="" disabled selected hidden>-- Misafidiana --</option>
              <option value="Mpitovo">Mpitovo</option>
              <option value="Manambady">Manambady</option>
              <option value="Nisara-panambadiana">Nisara-panambadiana</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="adresse" class="form-label">Adiresy</label>
            <input type="text" class="form-control" name="adresse" id="adresse" value="<?= old('adresse') ?>" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')">
          </div>

          <div class="col-md-6">
            <label for="sexe" class="form-label">Sokajy</label>
            <select class="form-select" name="sexe" id="sexe" value="<?= old('sexe') ?>" required oninvalid="this.setCustomValidity('Misafidiana amin\'ireo anaty lisitra')"
  oninput="this.setCustomValidity('')"> 
              <option value="" disabled selected hidden>-- Misafidiana --</option>
              <option value="Lahy">Lahy</option>
              <option value="Vavy">Vavy</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="profession" class="form-label">Asa atao</label>
            <input type="text" class="form-control" name="profession" id="profession" value="<?= old('profession') ?>" required oninvalid="this.setCustomValidity('Fenoy ity saha ity azafady')"
  oninput="this.setCustomValidity('')">
          </div>

          <div class="col-md-6">
            <label for="pere" class="form-label">Ray</label>
            <select class="form-select" name="pere" id="pere">
              <option value="">-- Misafidiana --</option>
              <?php foreach ($peres as $p): ?>
                <option value="<?= $p['idHabitant'] ?>" <?= old('pere') == $p['idHabitant'] ? 'selected' : '' ?>>
                  <?= $p['nom'] . ' ' . $p['prenom'] ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-6">
            <label for="mere" class="form-label">Reny</label>
            <select class="form-select" name="mere" id="mere">
                <option value="">-- Misafidiana --</option>
                <?php foreach ($meres as $m): ?>
                <option value="<?= $m['idHabitant'] ?>" <?= old('mere') == $m['idHabitant'] ? 'selected' : '' ?>>
                    <?= $m['nom'] . ' ' . $m['prenom'] ?>
                </option>
                <?php endforeach; ?>
            </select>
          </div>

          <!-- <div class="col-md-6">
            <label for="idPere" class="form-label">ID du père</label>
            <input type="number" class="form-control" name="idPere" id="idPere">
          </div> -->

          <!-- <div class="col-md-6">
            <label for="idMere" class="form-label">ID de la mère</label>
            <input type="number" class="form-control" name="idMere" id="idMere">
          </div> -->

          <div class="col-12 d-grid">
            <button type="submit" class="btn">Vita ny famenoana</button>
          </div>
          <div class="col-12 d-grid">
            <a class="btn btn-app bg-secondary text-white" href="<?= base_url('/mponina') ?>">
                <i class="fas fa-back"></i> Hijery ny lisitra
            </a>
          </div>

        </form>
      </div>
    </div>
  </div>
</body>
</html>