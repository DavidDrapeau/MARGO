<?php

class C_connexion  
{
    
    function seConnecter() {

        $pdo = M_DaoConnexion::connecter();
        if ($pdo) {
            $listeCateg = M_DaoCategorie::getAll($pdo);
        }
        M_DaoConnexion::deconnecter($pdo);


        $titre = "La fleur and co";
        $entete = RACINE . "/vue/vueEntete.inc.php";
        $gauche = RACINE . "/vue/vueGauche.inc.php";
        $centre = RACINE . "/vue/vueCentreSeConnecter.inc.php";
        $pied = RACINE . "/vue/vuePied.inc.php";


        $this->vue = new V_Vue(RACINE . '/vue/template.inc.php');
        $this->vue->ajouter('listeCateg', $listeCateg);

        $this->vue->ajouter('titre', $titre);
        $this->vue->ajouter('entete', $entete);
        $this->vue->ajouter('gauche', $gauche);
        $this->vue->ajouter('centre', $centre);
        $this->vue->ajouter('pied', $pied);
        $this->vue->afficher();
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
