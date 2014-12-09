<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class C_classe 
{
    
    private $connexion=true;
    
    function ajouter()
    { 
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;
        
        $filiere = new M_DaoFiliere() ;
        $filiere->connecter() ;
        $filiere->getPdo() ;
        
     
        $filieres = $filiere->getAll() ;

      
            $this->vue->ajouter('listeFiliere', $filieres);
            $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
            $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
            $this->vue->ajouter('centre',"../Vue/includes/centreAjoutClasse.php");
            $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));    
        $this->vue->afficher();
      
            
    }
    
    function afficher()
    {
        
    }
    
    function validation()
    {
        $role =true;
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;
        
 
        $daoClasse = new M_DaoClasse();
        $daoClasse->connecter();
        $daoClasse->getPdo() ;

        $numClass = $_POST['numClass'] ;
        $nameClasse = $_POST['nameClasse'] ;
        $filiere = intval($_POST['filiere']) ;
        $row = array(
            'numClasse' => $numClass,
            'nomClasse' => $nameClasse
            ) ;
        $idSpec = null ;
                       
        $classe = new M_Classe($numClass, $idSpec, $filiere, $nameClasse) ;
        $test=$daoClasse->verif($row) ;
        if($test!=null) 
        {
            $message = $test ;
            $role = false;
        }
        else {
            if($daoClasse->insert($classe)=='true')
        {
            $message='La classe à été bien ajoutée' ;
        } else
        {
            $message ="Une erreure s'est produite" ;
        }
        }
        
        $this->vue->ajouter('message', $message) ;
      
        
        $this->show($message) ;
        
      
    }
    
    function show($message=null, $role=null)
    {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;        
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/includes/centreAfficherClasses.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
        $daoClasse = new M_DaoClasse();
        $daoClasse->connecter();
        $daoClasse->getPdo() ;
        
        $classes = $daoClasse->getAll();
      
        
        $this->vue->ajouter('listeClasses', $classes) ;
        
        if($message)
        {
            $this->vue->ajouter('message', $message) ;
            $this->vue->ajouter('role', $role) ;
        }
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher() ;
    }
    
    
    function showByID()
    {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;        
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/includes/centreAfficherDetailClasse.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
    
        
        $id = $_GET['idClasse'] ;
        
        $daoClasse = new M_DaoClasse();
        $daoClasse->connecter();
        $daoClasse->getPdo() ;
        
          $laClasse = $daoClasse->getAllById($id);
      
        
        $this->vue->ajouter('laClasse', $laClasse) ;
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher() ;
        
    }
    
    function deleteById()
    {
           
        $daoClasse = new M_DaoClasse();
        $daoClasse->connecter();
        $daoClasse->getPdo() ;      
        $id=$_GET['idClasse'] ;
        if($daoClasse->delete($id))
        {
            $message = "La classe à bien été supprimée " ;
        } else 
        {
            $message ="Une erreure s'est produite" ;
        }
        $this->show($message) ;
    }
    
    function updateById()
    {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;        
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/includes/centreModifierClasse.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
    
        
        $id = $_GET['idClasse'] ;
        
        $daoClasse = new M_DaoClasse();
        $daoClasse->connecter();
        $daoClasse->getPdo() ;
        
        $laClasse = $daoClasse->getAllById($id);
         $this->vue->ajouter('laClasse', $laClasse) ;
        
        $this->vue->afficher() ;
    }
    
    function update()
    {
      
        
        $daoClasse = new M_DaoClasse();
        $daoClasse->connecter();
        $daoClasse->getPdo() ;   
        
        $id=$_POST['numClass'] ;
        $nomClass=$_POST['nameClasse'] ;
        if(!empty($_POST['speClasse']))
        {
            $idSpec = intval($_POST['speClasse']) ; 
        } else
        {
            $idSpec = null ;
        }
       
        $numFiliere = intval($_POST['numFiliere']) ;
        
        $classe = new M_Classe($id, $idSpec, $numFiliere, $nomClass) ;
         
       if($daoClasse->update($id,$classe))
       {
           $message = "/!\ La classe à bien été mise à jour /!\ " ;
           
       } else {
           $message = "Une erreur lors de la mise à jour" ;
       }
           
        $this->show($message) ;
        
    }
    
    function getConnexion(){
         return $this->connexion;
    }
}
