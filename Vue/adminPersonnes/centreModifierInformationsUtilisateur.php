<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<?php 
$unUtilisateur = $this->lire('personne');

?>
<form method="post" action=".?controleur=AdminPersonnes&action=ValidationModifPersonne" name=UpdatePerson>
    <h1>Informations personnelles</h1>
    <!-- $this->message : à afficher sous le formulaire -->
    <h1>Creation d'une personne</h1>
    <!-- Choix du type de compte pour afficher les différentes informations pour créer un compte spécifique -->
    <fieldset>

        <legend>Type de compte</legend>
        <input type="hidden" readonly="readonly" name="id" id="id"></input>
        <label for="role">R&ocirc;le :</label>
        <select OnChange="javascript:choixRole();"  name="role" id="role" ><!-- le OnChange éxécute la fonction qui affichera ou non le formulaire etudiant -->
            <option value=""></option>

            <?php
            // remplissage du "SELECT" qui contien les roles
            foreach ($this->lire('lesRoles') as $role) {
                if($unUtilisateur->getRole()->getId()==$role->getId()){
                    echo'<option selected="selected" value="' . $role->getId() . '">' . $role->getLibelle() . '</option>';
                }else{
                    echo'<option  value="' . $role->getId() . '">' . $role->getLibelle() . '</option>';
                }
                
            }
            ?>  
        </select>

    </fieldset>




    <!-- Données valables pour tous les rôles -->
    <fieldset>
        <legend>Ses informations g&eacute;n&eacute;rales</legend>
        <input type="hidden" readonly="readonly" name="id" id="id"></input>
        <label for="civilite">Civilit&eacute; :</label>

        <select type="select" name="civilite" id="civilite">
            <option>Madame</option>
            <option>Monsieur</option>
        </select>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value= <?php $unUtilisateur->getNom()?>></input><br/>
        <label for="prenom">Pr&eacute;nom :</label>
        <input type="prenom" name="prenom" id="prenom"></input><br/>
        <label for="mail">E-Mail :</label>
        <input type="text" name="mail" id="mail"></input><br/>
        <label for="tel">Tel :</label>
        <input type="text" name="tel" id="tel"></input><br/>
        <label for="tel">Tel portable:</label>
        <input type="text" name="telP" id="telP"></input><br/>
    </fieldset>

    <!-- Information nécessaire uniquement aux étudiants -->

    <div id="Formulaire_Etudiant" style="visibility:hidden" height="0">
        <fieldset>
            <legend>Informations specifiques aux étudiant</legend>


            <label for="etudes">Etudes :</label>
            <input type="text" name="etudes" id="etudes"></input><br/>
            <label for="formation">Formation :</label>
            <input type="text" name="formation" id="formation"></input><br/>
            <label for="option">Specialité :</label>
            <select name ="option" id="option">
                <option value=""></option>
                <?php
//création du contenu du select pour les spécialités des étudiants
                foreach ($this->lire('lesSpecialites') as $spe) {
                    echo'<option value="' . $spe->getId() . '">' . $spe->getLibellecCourt() . '</option>'; //echo de la ligne 
                }
                ?>
            </select>
        </fieldset>  
    </div>

    <!-- Donnée de conection des utilisateur -->
    <fieldset>
        <legend>Ses identifiants de connexion</legend>
        <label for="login">Login :</label>
        <input type="text" name="login" id="login"></input><br/>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp"></input><br/>
        <label for="mdp2">Retaper le mot de passe :</label>  <!-- vérification de mots de passe -->
        <input type="password" name="mdp2" id="mdp2"></input><br/>
    </fieldset>
    <fieldset>
        <input type="submit" value="Creer" onclick="return valider()"></input><!-- OnClick éxécutera le JS qui testera tout les champ du formulaire. -->
        <input type="button" value="Retour" onclick="history.go(-1)">
    </fieldset>
</form>
<?php
// message de validation de création ou non 
if (isset($this->message)) {
    echo "<strong>" . $this->message . "</strong>";
}

?>
