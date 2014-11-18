<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class C_Classe 
{
    
    function ajouter()
    { 
        $uneVue = new V_Vue("../Vue/templates/template_inc.php" );
        $uneVue->vue = new V_Vue("../Vue/templates/template_inc.php");
        $uneVue->vue->ajouter('titreVue','MARGO | Ajout classe') ;
            
   
            $uneVue->ajouter('entete',"../Vue/vueEntete.inc.php");
            $uneVue->ajouter('gauche',"../Vue/vueGauche.inc.php");
            $uneVue->ajouter('centre',"../Vue/includes/centreAjoutClasse.php");
            $uneVue->ajouter('pied', "../Vue/vuePied.inc.php");
            
        $uneVue->afficher();
      
            
    }
    
    function afficher()
    {
        $uneVue = new V_Vue("../Vue/templates/template_inc.php" );
        $uneVue->vue = new V_Vue("../Vue/templates/template_inc.php");
        $uneVue->vue->ajouter('titreVue','MARGO | Afficher classe') ;
        
        
            $uneVue->ajouter('entete',"../Vue/vueEntete.inc.php");
            $uneVue->ajouter('gauche',"../Vue/vueGauche.inc.php");
            $uneVue->ajouter('centre',"../Vue/includes/centreAjoutClasse.php");
            $uneVue->ajouter('pied', "../Vue/vuePied.inc.php");
            
        $uneVue->afficher();
    }
}
