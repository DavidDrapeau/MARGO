
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class C_Enseignement 
{
    private $connexion=true;
    
    
    function ajouter($message=null)
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
        $this->vue->ajouter('loginAuthentification', MaSession::get('login')); 
        if(isset($message))
        {
            $this->vue->ajouter('message', $message) ;
        }
        
        $this->vue->afficher();
      
            
    }
    
    function afficher($message=null)
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
          if(isset($message))
        {
            $this->vue->ajouter('message', $message) ;
        }
        
        $this->vue->afficher();
    }
    
    function validation()
    {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout enseignement') ;
        
         
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
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        
        $this->afficher($message) ;
    }

        function showByID()
    {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;        
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/enseignement/afficherDetailEnseignement.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
    
        
        $id = $_GET['idEnseignement'] ;
        
        $daoEnseignement = new M_DaoEnseignement();
        $daoEnseignement->connecter();
        $daoEnseignement->getPdo() ;
        
          $lenseignement = $daoEnseignement->getAllById($id);
      
        
        $this->vue->ajouter('lenseignement', $lenseignement) ;
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher() ;
        
    }
    
    function deleteById()
    {
           
        $daoEnseignement = new M_DaoEnseignement();
        $daoEnseignement->connecter();
        $daoEnseignement->getPdo() ;      
        $id = $_GET['idEnseignement'] ;
        $mess=  $daoEnseignement->delete($id) ;        
        $this->afficher($mess) ;
    }
    
    function updateById()
    {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;        
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/enseignement/modifierEnseignement.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
    
        
        $id = $_GET['idEnseignement'] ;
        
        $daoEnseignement = new M_DaoEnseignement();
        $daoEnseignement->connecter();
        $daoEnseignement->getPdo() ;
        
        $lenseignement = $daoEnseignement->getAllById($id);
        $this->vue->ajouter('lenseignement', $lenseignement) ;

        
        $this->vue->afficher() ;
    }
    
    function update()
    {
      
        
        $daoEnseignement = new M_DaoEnseignement();
        $daoEnseignement->connecter();
        $daoEnseignement->getPdo() ;   
        
        
        $id=intval($_POST['idEnseignement']) ;
        $libEnseignement=$_POST['libEnseignement'] ;
        
   
        
        $lenseignement = new M_Enseignement($id, $libEnseignement) ;
       
         
       if($daoEnseignement->update($id,$lenseignement))
       {
           $message = "/!\ L'enseignement à bien été mise à jour /!\ " ;
           
       } else {
           $message = "Une erreur lors de la mise à jour" ;
       }
           
        $this->afficher($message) ;
        
    }
    
    function getConnexion(){
         return $this->connexion;
    }
}



