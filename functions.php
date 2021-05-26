<?php 
function creneaux_html (array $creneaux) {
    $phrases = [];
    foreach ($creneaux as $creneau) {
        $phrases[] = "de <strong>" . $creneau[0] . "h</strong> à <strong>" . $creneau[1] . "h</strong>";
    }
    $creneaux_html = implode(" et ", $phrases);
    return "Ouvert de " . $creneaux_html;
}
?>