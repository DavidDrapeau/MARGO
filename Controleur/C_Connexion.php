<?php

class C_connexion  
{
    
    function seConnecter() {
    $uneVue = new V_Vue("../Vue/templates/template_inc.php" );
        $uneVue->ajouter('titre', 'Se connecter');
        $uneVue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $uneVue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $uneVue->ajouter('centre',"../Vue/connexion/seconnecter.php");
        $uneVue->ajouter('pied', "../Vue/vuePied.inc.php");
            
        $uneVue->afficher();
    }

    function authentifier() {

        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        $pdo = M_DaoConnexion::connecter();
        if ($pdo) {
            $verifLogin = M_DaoClient::verifierLogin($pdo, $login, $mdp);
        }
        M_DaoConnexion::deconnecter($pdo);


        if ($verifLogin) {
            //Succes
            SessionAuthentifiee::authentifier(array('login' => $login));
            header("Location: " . RACINE . "/public/index.php");
        } else {
            //Echec
            SessionAuthentifiee::finAuthentification();
            $this->seConnecter();
        }
    }

    function seDeconnecter() {
        SessionAuthentifiee::finAuthentification();
        header("Location: " . RACINE . "/public/index.php");
    }

    
}
