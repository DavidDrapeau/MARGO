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
        $uneVue->vue->ajouter('titreVue','MARGO | Ajout matière') ;
        
        $filiere = new M_DaoFiliere() ;
        $filieres = $filiere->getAll() ;
        var_dump($filieres) ;
   
            $uneVue->ajouter('entete',"../Vue/vueEntete.inc.php");
            $uneVue->ajouter('gauche',"../Vue/vueGauche.inc.php");
            $uneVue->ajouter('centre',"../Vue/includes/centreAjoutEnseignement.php");
            $uneVue->ajouter('pied', "../Vue/vuePied.inc.php");
            
        $uneVue->afficher();
      
            
    }
    
    function afficher()
    {
        
    }
}
