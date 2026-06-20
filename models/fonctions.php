<?php
function pasvide($tab = []) {
    if (count($tab) > 0) {
        foreach ($tab as $val) {
            if (empty($val)) return false;
        }
        return true; // ← en dehors de la boucle
    }
    return false;
}
function saveInputData(){
    foreach ($_POST as $key => $value) {
        $_SESSION["input"] [$key] = $value;
    }
}

function getInputValue($name) {
    return isset($_SESSION["input"][$name]) 
        ? $_SESSION["input"][$name] 
        : null;
}