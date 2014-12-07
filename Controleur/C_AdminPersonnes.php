<?php


/**
 * Description of C_AdminPersonnes
 * CRUD Personnes
 * @author btssio
 */
class C_AdminPersonnes extends C_ControleurGenerique {
    // Fonction d'affichage du formulaire de création d'une personne
    function creerPersonne(){
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('titreVue', 'Cr&eacute;ation d\'une personne');
        // ... depuis la BDD       
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $pdo = $daoPers->getPdo();
        
        // Mémoriser la liste des spécialités disponibles
        $daoSpecialite = new M_DaoSpecialite();
        $daoSpecialite->setPdo($pdo);
        $this->vue->ajouter('lesSpecialites', $daoSpecialite->getAll());
      
        // Mémoriser la liste des rôles disponibles
        $daoRole = new M_DaoRole();
        $daoRole->setPdo($pdo);
        $this->vue->ajouter('lesRoles', $daoRole->getAll());
        
        
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");
        $this->vue->ajouter('centre', "../Vue/adminPersonnes/centreCreerPersonne.php");
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        $this->vue->ajouter('loginAuthentification',MaSession::get('login'));       
        $this->vue->afficher();
    }
    
    //validation de création d'utilisateur 

    	function validationcreerPersonne(){
        //Récupération données
        $specialite = $_POST["option"];
        $role = $_POST["role"];
        $civilite = $_POST["civilite"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $numTel = $_POST["tel"];
        $mobile = $_POST["telP"];
        $etudes = $_POST["etudes"];
        $formation = $_POST["formation"];
       $login = $_POST["login"];
        $mdp = sha1($_POST["mdp"]);
        
        //On vérifie les données
        if (!empty($nom) && !empty($prenom) && !empty($mail) && !empty($login) && !empty($mdp) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail) && preg_match('`^0[1-9]([-. ]?[0-9]{2}){4}$`', $numTel)) {
            //Création des objets
            $daoPers = new M_DaoPersonne();
            $daoPers->connecter();
            
            //Vérification données en bdd
            $verif = $daoPers->verif('adresse_mail', $mail);
            if ($verif == 0) {
                $message = "Erreur : l'adrese email existe déjà, recommencez !";
            }
            $verif = $daoPers->verif('loginutilisateur', $login);
            if ($verif == 0) {
                $message .= "Erreur : le login existe déjà, recommencez !";
            }
            $daoPers->getPdo();
           
            //Création des objets
            $objetRole = new M_Role($role, null, null);
            $pers = new M_Personne(null, $specialite, $objetRole, $civilite, $nom, $prenom, $numTel, $mail, $mobile, $etudes, $formation, $login, $mdp);
            //Connexion et insert bdd
            $daoPers->connecter();
            $pdo = $daoPers->getPdo();
            
            if ($verif != 0) {
                if ($daoPers->insert($pers) == true) {
                    header('Location: ?controleur=AdminPersonnes&action=afficherPersonne&idPersonne=' . $daoPers->getOneByLogin($login)->getId());
                }
            } else {
            if(is_null($message)){
                $message = 'Erreur de création, veuillez saisir correctement les données';
            }
            $this::creerPersonne($message);
            }
        }
         
        }
        
        
        
        /**
     * Fonction qui permet d'afficher une Personne après validation
     * @param id de la personne
     */
    function afficherPersonne() {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");       
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
       
        // les données
        $this->vue->ajouter('titreVue', "Afficher une personne");
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $idPersonne = $_GET['idPersonne'];
        $personne = $daoPers->getOneById($idPersonne);
        $daoPers->deconnecter();
        $this->vue->ajouter('utilisateur', $personne);
        $this->vue->ajouter('centre', "../Vue/adminPersonnes/centreAfficherInformationsUtilisateur.php");
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }
    
    /**
     * Fonction qui permet d'afficher la liste des personnes
     */
    function listePersonnes(){
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");  
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
        //Récupérations des données
        $this->vue->ajouter('titreVue', "Liste des personnes");
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $lesPersonnes= $daoPers->getAll();
        $daoPers->deconnecter();
        $this->vue->ajouter('lesPersonnes', $lesPersonnes);
        $this->vue->ajouter('centre', "../Vue/adminPersonnes/centreAfficherListePersonnes.php");
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }
    
            /**
     * Fonction qui permet d'afficher une Personne et on peut modifier ses informations
     * @param id de la personne
     */
    function modifierPersonne() {
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");       
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
       
        // les données
        $this->vue->ajouter('titreVue', "Afficher une personne");
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $idPersonne = $_GET['idPersonne'];
        $personne = $daoPers->getOneById($idPersonne);
        $daoPers->deconnecter();
        $this->vue->ajouter('utilisateur', $personne);
        $this->vue->ajouter('centre', "../Vue/adminPersonnes/centreModifierInformationsUtilisateur.php");
        $this->vue->ajouter('loginAuthentification', MaSession::get('login'));
        $this->vue->afficher();
    }
    
    function validationModifPersonne(){
        $this->vue = new V_Vue("../Vue/templates/template_inc.php");
        $this->vue->ajouter('entete',"../Vue/vueEntete.inc.php");
        $this->vue->ajouter('gauche',"../Vue/vueGauche.inc.php");       
        $this->vue->ajouter('pied', "../Vue/vuePied.inc.php");
        
        //les données
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $idPersonne = $_GET['idPersonne'];
        
    }
   }
?>

