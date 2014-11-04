<?php

class C_accueil{
    
    function accueil() {
        
        $uneVue = new V_Vue("../Vue/templates/template_inc.php" );
        $uneVue->ajouter('titre', 'Authentification');
        $uneVue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $uneVue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $uneVue->ajouter('centre',"../Vue/accueil/accueil.php");
        $uneVue->ajouter('pied', "../Vue/vuePied.inc.php");
            
        $uneVue->afficher();
    }

}
?>

