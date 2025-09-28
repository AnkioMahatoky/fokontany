<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Fanamarinam-ponenana</title>
  <link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css')?>">
  <link rel="icon" type="image/png" href="../../dist/img/logo.png">

  <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        @media print {
            .no-print {
                display: none !important;
            }
        }
  </style>
</head>
</head>
<body>
  <div class="doc">
    <div class="d-flex text-center">
      <p class="text-left mx-5">MINISTERE DE L'INTERIEUR <br>
      ET DE LA DECENTRALISATION <br>
      PREFECTURE ANTANANARIVO <br>
      DISTRICT ANTANANARIVO AVARADRANO <br>
      ARRONDISSEMENT V <br>
      FOKONTANY ANTANAMBAO
      </p>
      <img src="<?= base_url('../../dist/img/logoRepublique.jpg') ?>" alt="Logo ici" height="100" class="rounded mx-auto d-block">
    </div>
   
    <h2 class="text-center">Fanamarinam-ponenana</h2>
    <p class="text-center text-secondary">(Certificat de résidence)</p>
    <div class="contenu mx-5">
      <p><strong>Fokontany : </strong>ANTSOBOLO </p>
      <?php if($habitant['sexe']=="Lahy"): ?>
        <p><strong>Atoa : </strong> <?= $habitant['nom'] ?> <?= $habitant['prenom'] ?></p>      
      <?php else: ?>
        <p><strong>Rtoa : </strong><?= $habitant['nom'] ?> <?= $habitant['prenom'] ?></p>
      <?php endif; ?>
        <p><strong>Teraka tamin'ny : </strong> <?= $habitant['date_naissance'] ?> tao <?= $habitant['lieu_naissance'] ?></p>
        <p><strong>Monina ao : </strong><?= strtoupper($habitant['adresse'])?></p>
        <p><strong>Zanak'i : </strong><?= $habitant['pere_nom'] ?> sy <?= $habitant['mere_nom'] ?></p>
      <?php if (!empty($habitant['CIN'])): ?>
        <p><strong>Kara-panondro : </strong><?= $habitant['CIN'] ?></p>
      <?php elseif (!empty($habitant['num_copie'])): ?>
        <p><strong>Laharana kopia : </strong><?= $habitant['num_copie'] ?></p>
      <?php endif; ?>

        <p>Omena azy izao fanamarinana izao, mba hanan-kery sy ho azo ampiasaina amin'izay rehetra mety ilana azy</p>
        <p class = "d-flex justify-content-end me-5">Fokontany ANTANAMBAO Androany faha : <?=date("d m Y");?></p>
    </div>

  </div>

  <button class="btn btn-primary mx-auto d-block no-print" onclick="window.print()">Ho alaiko ho PDF</button>
</body>
</html>
