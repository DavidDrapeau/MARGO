<?php

class C_accueil{
    
    private $connexion=false;
    
    function accueil() {
        
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue->ajouter('titre', 'Authentification');
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/accueil/accueil.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }
    
    function getConnexion(){
         return $this->connexion;
    }

}
?>

