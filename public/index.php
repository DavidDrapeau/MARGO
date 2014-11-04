<?php

require_once("../conf/fonctions.php");

// Réception des paramètres
if (isset($_GET['controleur'])) {
    $controleur = $_GET['controleur'];
} else {
    $controleur = 'accueil';
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'defaut';
}

// Construction du nom de la classe contrôleur
$classeControleur = 'C_' . ucfirst($controleur);
// Instanciation
$ctrl = new $classeControleur();
// Appel de la méthode d'action
$ctrl->$action();

?>
