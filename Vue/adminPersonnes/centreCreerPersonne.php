<script language="JavaScript" type="text/javascript" src="../Vue/javascript/fonctionsJavascript.inc.js"></script>
<script language="JavaScript" type="text/javascript" src="../bibliotheques/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src=".../Vue/javascript/ajax.inc.js"></script>


<!-- VARIABLES NECESSAIRES -->

<!-- $this->message : à afficher sous le formulaire -->
<form method="post" action=".?controleur=AdminPersonnes&action=validationCreerPersonne" name="CreateUser">
    <h1>Creation d'une personne</h1>

    <!-- Choix du type de compte pour afficher les différentes informations pour créer un compte spécifique -->

    <fieldset>           
        <legend>Type de compte</legend>
        <div class="form-group">
            <input type="hidden" readonly="readonly" name="id" id="id"></input>
            <label class="col-sm-2 control-label" for="role">Rôle</label>
            <select OnChange="javascript:choixRole();"  name="role" id="role"><!-- le OnChange éxécute la fonction qui affichera ou non le formulaire etudiant -->
                <option value=""></option>

                <?php
                // remplissage du "SELECT" qui contien les roles
                foreach ($this->lire('lesRoles') as $role) {
                    echo'<option value="' . $role->getId() . '">' . $role->getLibelle() . '</option>';
                }
                ?>  
            </select>
        </div>
    </fieldset>





    <!-- Données valables pour tous les rôles -->

    <fieldset>
        <legend>Ses informations g&eacute;n&eacute;rales</legend>
        <div class="form-group">
            <input type="hidden" readonly="readonly" name="id" id="id"></input>
            <label class="col-sm-2 control-label" for="civilite">Civilit&eacute; :</label>

            <select type="select" name="civilite" id="civilite">
                <option>Madame</option>
                <option>Monsieur</option>
            </select>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="nom">Nom :</label>
            <input type="text" name="nom" id="nom"></input>
        </div>
        <div class="form-group"> 
            <label  class="col-sm-2 control-label" for="prenom">Pr&eacute;nom :</label>
            <input type="prenom" name="prenom" id="prenom"></input>
        </div>
        <div class="form-group"> 
            <label class="col-sm-2 control-label" for="mail">E-Mail :</label>
            <input type="text" name="mail" id="mail"></input>
        </div>
        <div class="form-group"> 
            <label class="col-sm-2 control-label" for="tel">Tel :</label>
            <input type="text" name="tel" id="tel"></input>
        </div>
        <div class="form-group"> 
            <label class="col-sm-2 control-label" for="tel">Tel portable:</label>
            <input type="text" name="telP" id="telP"></input>
        </div>

    </fieldset>


    <!-- Information nécessaire uniquement aux étudiants -->

    <div id="Formulaire_Etudiant" style="visibility:hidden" height="0">
        <fieldset>
            <legend>Informations specifiques aux étudiant</legend>

            <div class="form-group"> 

                <label class="col-sm-2 control-label" for="etudes">Etudes :</label>
                <input type="text" name="etudes" id="etudes"></input>
            </div>
            <div class="form-group"> 
                <label  class="col-sm-2 control-label" for="formation">Formation :</label>
                <input type="text" name="formation" id="formation"></input><br/>
            </div>
            <div class="form-group"> 
                <label class="col-sm-2 control-label" for="option">Specialité :</label>
                <select name ="option" id="option">
                    <option value=""></option>
                    <?php
                    //création du contenu du select pour les spécialités des étudiants
                    foreach ($this->lire('lesSpecialites') as $spe) {
                        echo'<option value="' . $spe->getId() . '">' . $spe->getLibellecCourt() . '</option>'; //echo de la ligne 
                    }
                    ?>
                </select>
            </div>

        </fieldset>  
    </div>

    <!-- Donnée de conection des utilisateur -->
    <fieldset>
        <legend>Ses identifiants de connexion</legend>

        <div class="form-group"> 
            <label class="col-sm-2 control-label" for="login">Login :</label>
            <input type="text" name="login" id="login"></input>
        </div>
        <div class="form-group"> 
            <label class="col-sm-2 control-label" for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp"></input>
        </div>
        <div class="form-group"> 
            <label class="col-sm-2 control-label" for="mdp2">Retaper le mot de passe :</label>  <!-- vérification de mots de passe -->
            <input type="password" name="mdp2" id="mdp2"></input><br/>
        </div>

    </fieldset>
    <fieldset>

        <input class="btn btn-primary" type="submit" value="Creer" onclick="return valider()"></input><!-- OnClick éxécutera le JS qui testera tout les champ du formulaire. -->
        <input class="btn btn-primary" type="button" value="Retour" onclick="history.go(-1)">
    </fieldset>
</form>
<?php
// message de validation de création ou non 
if (isset($this->message)) {
    echo "<strong>" . $this->message . "</strong>";
}
?>

