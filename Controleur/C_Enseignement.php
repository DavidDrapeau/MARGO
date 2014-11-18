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
               $this->vue = new V_Vue("../Vue/templates/template_inc.php");
            $this->vue->ajouter('titreVue','MARGO | Ajout matière') ;

        $this->vue->afficher();
            
    }
    
    function afficher()
    {
        
    }
}
