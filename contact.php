<?php
$titre = 'Nous contacter'; 
require 'header.php';
require_once 'config.php';
require_once 'functions.php';
?>

<div class='row'>
    <div class='col-md-8'>
        <h2>Nous contacter</h2>
        <p>lorem ipsum machin</p>
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouverture</h2>
        <ul>
            <?php foreach (JOURS as $k => $jour): ?>
                <strong><?= $jour ?></strong> :
                <li><?= creneaux_html(CRENEAUX[$k]); ?></li>
            <?php endforeach; ?>
        </ul>

        <?= dump(JOURS); ?>
        
    </div>
</div>



<?php require 'footer.php'; ?>