
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
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout enseigneùent') ;
   
        $filiere = new M_DaoEnseignement() ;
        $filiere->connecter() ;
        $filiere->getPdo() ;
        
            $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
            $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
            $this->vue->ajouter('centre',"../Vue/enseignement/ajoutEnseignement.php");
            $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
            
        $this->vue->afficher();
      
            
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
    
    function validation()
    {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout enseignement') ;
        
          
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/includes/centreAjouter.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        $daoEnseignement = new M_DaoEnseignement();
        $daoEnseignement->connecter();
        $daoEnseignement->getPdo() ;

        $idEnseignement = $_POST['idEnseignement'] ;
        $libEnseignement = $_POST['libEnseignement'] ;
                               
        $enseignement = new M_Enseignement($idEnseignement, $libEnseignement) ;
        
        if($daoEnseignement->insert($enseignement)=='true')
        {
            $message='Enseignement ajouté' ;
        } else
        {
            $message ="Une erreure s'est produite" ;
        }
        $this->vue->ajouter('message', $message) ;
        $this->vue->afficher() ;
    }
    
}

