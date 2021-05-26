<?php
// Checkbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];

// Radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];

// Checkbox
$supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];
?>

<form action='/glaces.php' method='GET'>
    <div class="form-group" id='parfums'>
    <h2>Parfums</h2>
        <input type='checkbox' name='parfums[]' value='Fraise'>Fraise</input>
        <input type='checkbox' name='parfums[]' value='Chocolat'>Chocolat</input>
        <input type='checkbox' name='parfums[]' value='Vanille'>Vanille</input>
    </div>
    <div class="form-group" id='cornet'>
    <h2>Cornet</h2>
        <input type='radio' name='cornet' value='Pot'>Pot</input>
        <input type='radio' name='cornet' value='Cornet'>Cornet</input>
    </div>
    <div class="form-group" id='supplements'>
    <h2>Suppléments</h2>
        <input type='checkbox' name='supplements[]' value='Pépites de chocolat'>Pépites de chocolat</input>
        <input type='checkbox' name='supplements[]' value='Chantilly'>Chantilly</input>
    </div>
    <br>
    <div class='form-group' id='submit'>
        <button type='submit' class="btn btn-primary">Valider</button>
    </div>
</form>

<!--
    test variables globales
-->
<h2>GET</h2>
<pre>
<?php var_dump($_GET); ?>
</pre>

<h2>Prix</h2>
<?php

$prix=0;

if (isset($_GET['parfums'])) {
foreach ($_GET['parfums'] as $yo) {
    $prix += $parfums[$yo];
};
echo 'prix parfums : ';
var_dump($prix);
}
?>
<br>

<?php
if (isset($_GET['cornet'])) {
$prix += $cornets[$_GET['cornet']];
echo 'prix parfums + cornet : ';
var_dump($prix);
}
?>
<br>

<?php
if (isset($_GET['supplements'])) {
foreach ($_GET['supplements'] as $yo) {
    $prix += $supplements[$yo];
};
}

echo 'prix total : ';
var_dump($prix);

?>