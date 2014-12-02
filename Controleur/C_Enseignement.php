
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class C_Enseignement 
{
    
    function ajouter()
    { 
        $uneVue = new V_Vue("../Vue/templates/template_inc.php" );
        $uneVue->vue = new V_Vue("../Vue/templates/template_inc.php");
        $uneVue->vue->ajouter('titreVue','MARGO | Ajout enseigneùent') ;
   
            $uneVue->ajouter('entete',"../Vue/vueEntete.inc.php");
            $uneVue->ajouter('gauche',"../Vue/vueGauche.inc.php");
            $uneVue->ajouter('centre',"../Vue/includes/centreAjoutEnseignement.php");
            $uneVue->ajouter('pied', "../Vue/vuePied.inc.php");
            
        $uneVue->afficher();
      
            
    }
    
    function afficher()
    {
               //Vue
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue->ajouter('titreVue',"Margo : Mon comp");
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/connexion/seconnecter.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
        
        // les données
        $this->vue->ajouter('titreVue', "Margo : Afficher les enseignements");
        $this->vue->ajouter('centre', "../Vue/enseignement/afficherEnseignement.php");
        $daoEnseignement = new M_DaoEnseignement();
        $daoEnseignement->connecter();
        $enseignements= $daoEnseignement->getAll();
        $this->vue->ajouter('enseignements', $enseignements);
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }
}

