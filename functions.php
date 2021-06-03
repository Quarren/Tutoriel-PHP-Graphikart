<?php 

function dump ($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function creneaux_html (array $creneaux) {
    if (empty($creneaux)) {
        return 'Fermé';
    }
    $phrases = [];
    foreach ($creneaux as $creneau) {
        $phrases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
    }
    return 'Ouvert ' . implode(' et ', $phrases);
}

function in_creneaux(int $heure, array $creneaux) {
    if ($heure >= $creneaux[0] && $heure < $creneaux[1]) {
        return true;
    } else {
        return false;
    }
}

function select(string $name, $value, array $options): string {
    $html_options = [];
    foreach($options as $k => $option) {
        $attributes = $k == $value ? ' selected ' : '';
        $html_options[] = "<option value='$k' $attributes>$option</option>";
    }
    return "<select class='form-control' name='$name'>" . implode($html_options) . "</select>";
}
?>