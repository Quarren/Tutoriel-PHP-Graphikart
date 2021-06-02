<?php
$titre = 'Nous contacter'; 
require 'header.php';
require_once 'config.php';
require_once 'functions.php';
date_default_timezone_set('Europe/Paris');
$day = date('N') -1;
$heure = date('H');
$creneaux = CRENEAUX[date($day)];
$ouvert = in_creneaux($heure, $creneaux);
$color = 'green';
$color = $ouvert ? 'green' : 'red';
?>

<div class='row'>
    <div class='col-md-8'>
        <h2>Nous contacter</h2>
        <p>lorem ipsum machin</p>
    </div>

    <div class='col-md-8'>
        <form action='/contact.php' method='GET'>  
            <div class="form-group" id='jour'>
                <h2>Jour</h2>
                <select name='jour' id='jour-select'>
                    <option value="">Choisissez un jour : </option>
                    <option value='Lundi'>Lundi</option>
                    <option value='Mardi'>Mardi</option>
                    <option value='Mercredi'>Mercredi</option>
                    <option value='Jeudi'>Jeudi</option>
                    <option value='Vendredi'>Vendredi</option>
                    <option value='Samedi'>Samedi</option>
                    <option value='Dimanche'>Dimanche</option>
                </select>
            </div>
            <div class='form-group' id='heure'>
                <h2>Heure</h2>
                <input type='number' id='heure' name='heure'></input>
            </div>
            <div class='form-group' id='submit'>
                <button type='submit' class='btn btn-primary'>Valider</button>
            </div>
        </form>
    </div>

    <?php
    $creneaux_form = CRENEAUX[array_search($_GET["jour"], JOURS)];
    $est_ouvert = (in_creneaux($_GET["heure"], $creneaux_form[0]) || in_creneaux($_GET["heure"], $creneaux_form[1]));
    ?>

    <div class='col-md-8'>
        <?php if ($est_ouvert) : ?>
            <div class="alert alert-success">
                Le magasin est ouvert le <?= $_GET["jour"] ?> à <?= $_GET["heure"] ?>h.
            </div>
        <?php else : ?>
            <div class="alert alert-danger">
                Le magasin est fermé le <?= $_GET["jour"] ?> à <?= $_GET["heure"] ?>h.
            </div>
        <?php endif ?>
    </div>

    <div class="col-md-4">
        <h2>Horaires d'ouverture</h2>
        <?php if ($ouvert): ?>
        <div class="alert alert-success">
            Le magasin est ouvert
        </div>
        <?php else: ?>
        <div class="alert alert-danger">
            Le magasin est fermé
        </div>
        <?php endif ?>
        <ul>
            <?php foreach (JOURS as $k => $jour): ?>
                <li <?php if ($k +1 === (int)date('N')): ?> style="color:<?= $color; ?>" <?php endif ?>>
                    <strong><?= $jour ?></strong> :
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>                 
            <?php endforeach; ?>
        </ul>

        <?php
            //dump(JOURS);
            //dump($heure);
            //dump($creneaux);
            //dump($ouvert);
            //dump($_GET);
            //dump($_GET["heure"]);
            //dump($_GET["jour"]);
            dump(CRENEAUX[array_search($_GET["jour"], JOURS)]);

            dump($creneaux_form[0]);

            dump($creneaux_form[1]);
            dump($est_ouvert);
        ?>

    </div>
</div>


<?php require 'footer.php'; ?>