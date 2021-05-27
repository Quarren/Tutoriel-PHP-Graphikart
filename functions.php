<?php 

function dump ($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function creneaux_html (array $creneaux) {
    $phrases = [];
    foreach ($creneaux as $jour) {
        foreach($jour as $creneau) {
            $phrases[] = "de <strong>" . $creneau[0] . "h</strong> à <strong>" . $creneau[1] . "h</strong>";
        }
    }
    $creneaux_html = implode(" et ", $phrases);
    return $creneaux_html;
}


?>