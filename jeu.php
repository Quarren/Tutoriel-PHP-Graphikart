<?php
// https://grafikart.fr/tutoriels/forms-php-1123#autoplay
// 21:34
$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;
if (isset($_GET['chiffre'])) {
    $value = (int)$_GET['chiffre'];
    if ($value > $aDeviner) {
        $erreur = "Votre chiffre est trop grand";
    } elseif ($value < $aDeviner) {
        $erreur = "Votre chiffre est trop petit";
    } else {
        $succes = "Bravo ! Vous avez deviné le chiffre <strong>$aDeviner</strong>";
    }
    
}
?>

<?php if ($erreur): ?>
<div class="alert alert-danger">
    <?= $erreur ?>
</div>
<?php elseif ($succes): ?>
<div class="alert alert-success">
    <?= $succes ?>
</div>
<?php endif ?>


    <form action="/jeu.php" method="GET">
    <div class="form-group">
        <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
    </div>
        <button type="submit" class="btn btn-primary">Deviner</button>
    </form>

<form action="/jeu.php" method="POST">
    <div class="form-group">
        <input type="checkbox" name="parfum[]" value="Fraise">Fraise</input>
        <input type="checkbox" name="parfum[]" value="Vanille">Vanille</input>
        <input type="checkbox" name="parfum[]" value="Chocolat">Chocolat</input>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>


<h2>$_GET</h2>
<pre>
<?php var_dump($_GET) ?>
</pre>

<h2>$_POST</h2>
<pre>
<?php var_dump($_POST) ?>
</pre>