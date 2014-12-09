<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class C_Promotion {

    private $connexion = true;

    function afficher() {

        //Vue
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('entete', "../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche', "../Vue/vueGauche.inc.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");


        // les données
        $this->vue->ajouter('titreVue', "Margo : Afficher les promotions");
        $this->vue->ajouter('centre', "../Vue/promotion/afficherPromotions.php");
        $daoPromotion = new M_DaoPromotion();
        $daoPromotion->connecter();
        $promotions = $daoPromotion->getAll();
        $this->vue->ajouter('promotions', $promotions);
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }

  /*  function ajouter($message = false) {

        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue', 'MARGO | Ajout Promotions');

        //Annees scolaire
        $daoAnneescol = new M_DaoAnneescol();
        $daoAnneescol->connecter();
        $anneeScolaire = $daoAnneescol->getAll();

        //Personnes
        $daoPersonne = new M_DaoPersonne();
        $daoPersonne->connecter();
        $personnes = $daoPersonne->getAll();

        //Classes
        $daoClasse = new M_DaoClasse();
        $daoClasse->connecter();
        $classes = $daoClasse->getAll();

        $this->vue->ajouter('entete', "../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche', "../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre', "../Vue/promotion/ajouterPromotion.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        $this->vue->ajouter('anneeScolaire', $anneeScolaire);
        $this->vue->ajouter('personnes', $personnes);
        $this->vue->ajouter('classes', $classes);
        if ($message) {
            $this->vue->ajouter('message', $message);
        }
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }

    function valider() {
        $message = Array();    


        $daoPromotion = new M_DaoPromotion();
        $daoPromotion->connecter();
        $daoPromotion->getPdo();


         //Validation data obligatoire      
        $message = Array();
        $validation = true;
        $champsNonObligatoires = array('annee', 'personne','classe');
        foreach ($_POST as $champ => $valeur) {
            if (!in_array($champ, $champsNonObligatoires)) {
                if (empty($valeur)) {
                    $message[] = "Champ non rempli : " . $champ;
                    $validation = false;
                }
            }
        }
           
        
       $annee = new M_Anneescol($_POST['annee']);
        $personne= new M_Personne($_POST['personne'], null, null, null, null, null, null, null, null, null, null, null, null);
        $classe = new M_Classe($_POST['classe'], null, null);
        
        $promotion = new M_Promotion($annee,$personne,$classe);
        

       

        if ($validation && $daoPromotion->insert($promotion) == 'true') {
            header('Location: ?controleur=Promotion&action=afficher');
        } else {
            $message[] = "Une erreure s'est produite";
            $this::ajouter($message);
        }
    }*/

    function getConnexion() {
        return $this->connexion;
    }

}
