<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class C_Filiere 
{
    
    function afficherFilieres(){
        
        
        //Vue
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue->ajouter('titreVue',"Margo : Mon comp");
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/connexion/seconnecter.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
        
        // les données
        $this->vue->ajouter('titreVue', "Margo : Afficher les filieres");
        $this->vue->ajouter('centre', "../Vue/filiere/afficherFilieres.php");
        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->connecter();
        $filieres= $daoFiliere->getAll();
        $this->vue->ajouter('filieres', $filieres);
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }
    
    
    
}