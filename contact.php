<?php
$titre = 'Nous contacter'; 
require 'header.php';
require_once 'config.php';
require_once 'functions.php';
$creneaux = creneaux_html(CRENEAUX);
?>

<div class='row'>
    <div class='col-md-8'>
        <h2>Nous contacter</h2>
        <p>lorem ipsum machin</p>
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouverture</h2>
        <?= $creneaux ?>

    </div>
</div>



<?php require 'footer.php'; ?>