<?php

require_once("../conf/fonctions.php");
require_once("../conf/parametre.php");


// Réception des paramètres
if (isset($_GET['controleur'])) {
    $controleur = $_GET['controleur'];
} else {
    $controleur = 'accueil';
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'accueil';
}

// Construction du nom de la classe contrôleur
$classeControleur = 'C_' . ucfirst($controleur);
// Instanciation
$ctrl = new $classeControleur();

//Vérifie si la session est obligatoire
$connexionObligatoire=$ctrl->getConnexion(); //True ou false
        
if($connexionObligatoire){
    if(!is_null(MaSession::get('login'))){
        $ctrl->$action();
    }else{
        $controleur="connexion";
        $action = 'seConnecter';
        // Construction du nom de la classe contrôleur
        $classeControleur = 'C_' . ucfirst($controleur);
        // Instanciation
        $ctrl = new $classeControleur();
        $ctrl->$action();
    }
        
         
}else{
    $ctrl->$action();
}

?>
