<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min.css")?>">
    <link rel="icon" type="image/png" href="../../dist/img/logo.png">
    <title>Fanamarinam-pahavelomana</title>
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
<body>
    <div >
        <div>
            <h4 class=" text-center">REPOBLIKAN'I MADAGASIKARA</h4>
            <p class=" text-center text-decoration-underline">Fitiavana - Tanindrazana - Fandrosoana</p>
        </div>
        <div class ="d-flex justify-content-center align-items-center text-center">
            <div>
                <p>MINISTERAN'NY ATITANY SY NY FITSINJARAM-PAHEFANA</p>
                <p>PREFECTIORAN'NY POLISIN'ANTANANARIVO</p>
                <p>DISTRIKAN'ANTANANARIVO V</p>
            </div>
            <img src="<?=base_url('../../dist/img/logo_fokontany.jpg')?>" class="w-10 h-10" alt="">

            <div>
                <div class="card text-center">
                    <h6>FANAMARINAM-PAHAVELOMANA</h6>
                    <h6><i>CERTIFICAT DE VIE INDIVIDUEL</i></h6>
                </div>
                <p><i>NY SEFO FOKONTANY DIA MANAMARINA FA :</i></p>
                <p><i>LE CHEF FOKONOTANY CERTIFIE QUE :</i></p>
            </div>
        </div>
        <div class = "mx-5"> 
            <p><strong>FOKONTANY</strong> : ANTSOBOLO</p>
            <!-- <P>LI :.............................. </P> -->
            <?php if($habitant['sexe']=="Lahy"): ?>
                <p><strong>Atoa : </strong> <?= $habitant['nom'] ?> <?= $habitant['prenom'] ?></p>      
            <?php else: ?>
                <p><strong>Rtoa : </strong><?= $habitant['nom'] ?> <?= $habitant['prenom'] ?></p>
            <?php endif; ?>
            <p><strong>Asa : </strong><?= $habitant['profession'] ?></p>
            <!-- <p><i>Mr Mlle Mme</i></p> -->
            <p><strong>Teraka tamin'ny :</strong><?= $habitant['date_naissance'] ?> : <strong>tao : </strong> <?= $habitant['lieu_naissance'] ?></p>
            <!-- <p><i>Née le                à</i></p> -->
            <p><strong>Zanak'i : </strong><?= $habitant['pere_nom'] ?> sy <?= $habitant['mere_nom'] ?></p>
            <!-- <p><i>fils de     et de</i></p> -->
            <?php if (!empty($habitant['cin'])): ?>
                <p><strong>Kara-panondro : </strong><?= $habitant['cin'] ?></p>
            <?php elseif (!empty($habitant['num_copie'])): ?>
                <p><strong>Laharana kopia : </strong><?= $habitant['num_copie'] ?></p>
            <?php endif; ?>
            <p><strong>Monina ao amin'ny adiresy: </strong><?= strtoupper($habitant['adresse'])?></p>
            <!-- <p><i>Logement</i></p> -->
        </div>
        <div class="text-center">
            <p><h6>DIA <strong>VELONA</strong> ARY NISEHO TETO ANATREHANAY ANDROANY</h6></p>
            <!-- <p><i>EST BIEN ET S'EST PRESENTE(E) DEVANT NOUS AUJOURD'HUI MËME</i></p> -->
        </div>
        <p class = "mx-5">Noho izany dia omena azy ity fanamarinana ity mba hampiasainy sy hanan-kery amin'izay mety ilaina azy</p>
        <p class = "d-flex justify-content-end me-5">Fokontany ANTANAMBAO Androany faha : <?=date("d m Y");?></p>
        <!-- <div class="d-flex gap-2 col-2 mx-auto justify-content-between">
            <button class="btn btn-outline-warning  mt-3" type="submit">Alaina</button>
            <button class="btn btn-outline-warning  mt-3" type="submit">Averina</button>
        </div> -->
        <button class="btn btn-primary mx-auto d-block no-print" onclick="window.print()">Ho alaiko ho PDF</button>
    </div>
</bod>
</html>