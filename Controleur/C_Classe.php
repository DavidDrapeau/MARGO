<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class C_classe 
{
    
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
            
        $this->vue->afficher();
      
            
    }
    
    function afficher()
    {
        
    }
    
    function validation()
    {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;
        
          
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/includes/centreAjouter.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        $daoClasse = new M_DaoClasse();
        $daoClasse->connecter();
        $daoClasse->getPdo() ;

        $numClass = $_POST['numClass'] ;
        $nameClasse = $_POST['nameClasse'] ;
        $filiere = intval($_POST['filiere']) ;
        
        $idSpec = null ;
        
        
        
       

        
        $classe = new M_Classe($numClass, $idSpec, $filiere, $nameClasse) ;
        
        if($daoClasse->insert($classe)=='true')
        {
            $message='Classe bien ajouter' ;
        } else
        {
            $message ="Une erreure s'est produite" ;
        }
        $this->vue->ajouter('message', $message) ;
        $this->vue->afficher() ;
    }
}
