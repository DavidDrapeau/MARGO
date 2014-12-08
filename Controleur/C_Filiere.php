<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class C_Filiere {
    
    private $connexion=true;

    function afficher() {


        //Vue
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue', "Margo : Mon comp");
        $this->vue->ajouter('entete', "../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche', "../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre', "../Vue/connexion/seconnecter.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");


        // les données
        $this->vue->ajouter('titreVue', "Margo : Afficher les filieres");
        $this->vue->ajouter('centre', "../Vue/filiere/afficherFilieres.php");
        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->connecter();
        $filieres = $daoFiliere->getAll();
        $this->vue->ajouter('filieres', $filieres);
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }

    function editer($message = false) {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue', 'MARGO | Modifier Filières');

        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->connecter();
        $daoFiliere->getPdo();
        $filiere = $daoFiliere->getOneById($_GET["idFiliere"]);
        $this->vue->ajouter('filiere', $filiere);


        $this->vue->ajouter('entete', "../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche', "../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre', "../Vue/filiere/modifierFilieres.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        if ($message) {
            $this->vue->ajouter('message', $message);
        }
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }

    function ajouter($message = false) {

        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue', 'MARGO | Ajout Filières');

        $filiere = new M_DaoFiliere();
        $filiere->connecter();
        $filiere->getPdo();


        $filieres = $filiere->getAll();



        $this->vue->ajouter('entete', "../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche', "../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre', "../Vue/filiere/ajouterFilieres.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        if ($message) {
            $this->vue->ajouter('message', $message);
        }
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }

    function valider() {
        $message = Array();
        $validation = true;


        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->connecter();
        $daoFiliere->getPdo();


        $nomFiliere = $_POST['nomFiliere'];

        if ($nomFiliere == "") {
            $validation = false;
            $message[] = "Nom de filière vide";
        }

        $filiere = new M_Filiere(null, $nomFiliere);

        if ($validation && $daoFiliere->insert($filiere) == 'true') {
            header('Location: ?controleur=Filiere&action=afficher');
        } else {
            $message[] = "Une erreure s'est produite";
            $this::ajouter($message);
        }
    }

    function validerModification() {
        $message = Array();
        $validation = true;


        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->connecter();
        $daoFiliere->getPdo();


        $nomFiliere = $_POST['nomFiliere'];

        if ($nomFiliere == "") {
            $validation = false;
            $message[] = "Nom de filière vide";
        }

        $filiere = new M_Filiere($_GET["idFiliere"], $nomFiliere);

        if ($validation && $daoFiliere->update($_GET["idFiliere"], $filiere) == 'true') {
            header('Location: ?controleur=Filiere&action=afficher');
        } else {
            $message[] = "Une erreure s'est produite";

            $this::editer($message);
        }
    }

    function supprimer() {

        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->connecter();
        $daoFiliere->getPdo();
        $id = $_GET['idFiliere'];
        $daoFiliere->delete($id);

        header('Location: ?controleur=Filiere&action=afficher');
    }
    
    function getConnexion(){
         return $this->connexion;
    }

}
