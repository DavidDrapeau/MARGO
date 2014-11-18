<?php

class C_Connexion {

    /**
     * controleur= connexion & action= seConnecter
     * Afficher le formulaire d'authentification au centre
     */
    function seConnecter() {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue->ajouter('titre', 'Se connecter');
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/connexion/seconnecter.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
        $this->vue->afficher();
    }

    /**
     * controleur= accueil & action= authentifier
     * Vérifier les données d'authentification :
     *  - si c'est correct, démarrer une nouvelle session et afficher la page d'accueil
     *  - sinon, réafficher l'écran d'authentification
     */
    function authentifier() {
        
        
        
        $this->vue = new V_Vue("../Vue/templates/template_inc.php" );
        $this->vue->ajouter('titre', 'Se connecter');
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre',"../Vue/connexion/seconnecter.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
        $this->vue->ajouter('titreVue',"Margo : Accueil");
        $this->vue->ajouter('centre',"../Vue/connexion/authentification.php");


        //------------------------------------------------------------------------
        // VUE CENTRALE
        //------------------------------------------------------------------------
        $daoPersonne = new M_DaoPersonne();
        // Vérifier login et mot de passe saisis dans la formulaire d'authentification
        if (isset($_POST['login']) && isset($_POST['mdp'])) {
            $login = $_POST['login'];
            $mdp = $_POST['mdp'];
            $daoPersonne->connecter();
            $unUser = $daoPersonne->verifierLogin($login, $mdp);
            $daoPersonne->deconnecter();
            if ($unUser) {
                // Si le login et le mot de passe sont valides, ouvrir une nouvelle session
                MaSession::nouvelle(array('login' => $login, 'role' => $unUser["IDROLE"])); // service minimum
                header("Location:  index.php");
//                $this->vue->getDonnees['message'] = "Authentification r&eacute;ussie";
//                $this->vue->getDonnees['centre'] = "../vues/connexion/centreAuthentifier.inc.php";
            } else {
                $this->vue->ajouter('message',"ECHEC d'identification : login ou mot de passe inconnus ");
                $this->vue->ajouter('centre',"../Vue/connexion/seconnecter.php");
            }
        } else {
            $this->vue->ajouter('message',"Attention : le login ou le mot de passe ne sont pas renseign&eacute;s");
            $this->vue->ajouter('centre',"../Vue/connexion/seconnecter.php");
        }
        //------------------------------------------------------------------------

        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();


//        $this->vue->ajouterDonnee('roleAuthentification', get('idRole'));
    }

    /**
     * controleur= accueil & action= seDeconnecter
     * Afficher fermer la session en cours et afficher la page d'accueil
     */
    function seDeconnecter() {
        MaSession::fermer();
        header("Location:  index.php");
    }

}
