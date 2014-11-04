<?php

class C_accueil{
    
    function accueil() {
        
        $uneVue = new V_Vue(RACINE."/vue/template.inc.php" );
        $uneVue->ajouter('titre', 'Authentification');
        $uneVue->ajouter('entete',RACINE."/vue/vueEntete.inc.php");
        $uneVue->ajouter('gauche',RACINE."/vue/vueGauche.inc.php");
        $uneVue->ajouter('centre',RACINE."/vue/vueCentreAccueil.inc.php");
        $uneVue->ajouter('pied', RACINE."/vue/vuePied.inc.php");
            
        $uneVue->afficher();
    }

}
?>

