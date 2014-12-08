<?php 
$unUtilisateur = $this->lire('personne');
?>
<form method="post" action=".?controleur=AdminPersonnes&action=ValidationModifPersonne&idPersonne=<?php echo $unUtilisateur->getId() ?>" name=UpdatePerson>


        <legend>Type de compte</legend>
        <input type="hidden" readonly="readonly" name="id" id="id"></input>
         <div class="form-group">
        <label class="col-sm-2 control-label" for="role">R&ocirc;le :</label>
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
         </div>
    </fieldset>




    <!-- Données valables pour tous les rôles -->
    <fieldset>
        <legend>Ses informations g&eacute;n&eacute;rales</legend>
        <input type="hidden" readonly="readonly" name="id" id="id"></input>
         <div class="form-group">
        <label class="col-sm-2 control-label" for="civilite">Civilit&eacute; :</label>

        <select type="select" name="civilite" id="civilite">
            <option value="" ></option>
           <?php
                echo'<option selected="selected" value="' . $unUtilisateur->getCivilite() . '">'.$unUtilisateur->getcivilite().'</option>';

            ?> 
            <option>Monsieur</option>
            <option>Madame</option>
        </select>
         </div>
         <div class="form-group">
        <label class="col-sm-2 control-label" for="nom">Nom :</label>
        <input class="form-control" type="text" name="nom" id="nom" value= <?php echo($unUtilisateur->getNom())?> ></input>
        </div>
         <div class="form-group">
        <label class="col-sm-2 control-label" for="prenom">Pr&eacute;nom :</label>
        <input class="form-control" type="prenom" name="prenom" id="prenom" value= <?php echo($unUtilisateur->getPrenom())?>></input>
       </div>
         <div class="form-group">
        <label class="col-sm-2 control-label" for="mail">E-Mail :</label>
        <input class="form-control" type="text" name="mail" id="mail" value= <?php echo($unUtilisateur->getMail())?>></input>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="tel">Tel :</label>
        <input class="form-control" type="text" name="tel" id="tel" value= <?php echo($unUtilisateur->getNumTel())?>></input>
        </div>
         <div class="form-group">
        <label class="col-sm-2 control-label" for="tel">Tel portable:</label>
        <input class="form-control" type="text" name="telP" id="telP" value= <?php echo($unUtilisateur->getMobile())?>></input>
        </div>
    </fieldset>

    <!-- Information nécessaire uniquement aux étudiants -->

    <div id="Formulaire_Etudiant" style="//visibility:hidden" height="0">
        <fieldset>
            <legend>Informations specifiques aux étudiant</legend>
             <div class="form-group">
            <label class="col-sm-2 control-label" for="etudes">Etudes : </label>
            <input class="form-control" type="text" name="etudes" id="etudes" value= <?php echo($unUtilisateur->getEtudes())?>></input><br/>
             </div>
             <div class="form-group">
            <label class="col-sm-2 control-label" for="formation">Formation :</label>
            <input class="form-control" type="text" name="formation" id="formation" value= <?php echo($unUtilisateur->getFormation())?>></input><br/>
             </div>
            <div class="form-group">
            <label class="col-sm-2 control-label" for="option">Specialité :</label>
            <select name ="option" id="option">
                <option value=""></option>
                <?php
            // remplissage du "SELECT" qui contien les specialités
            foreach ($this->lire('lesSpecialites') as $specialite) {
                if($unUtilisateur->getSpecialite()!=null){
                     if($unUtilisateur->getSpecialite()->getId()==$specialite->getId()){
                        echo'<option selected="selected" value="' . $specialite->getId() . '">' . $specialite->getLibellecCourt() . '</option>';
                     }else{
                        echo'<option  value="' . $specialite->getId() . '">' . $specialite->getLibellecCourt() . '</option>';
                     }
                }else{
                    echo'<option  value="' . $specialite->getId() . '">' . $specialite->getLibellecCourt() . '</option>';
                }
                
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
        <input  class="form-control" type="text" name="login" id="login" value= <?php echo($unUtilisateur->getLogin())?>></input><br/>
         </div>
         <div class="form-group">
        <label class="col-sm-2 control-label" for="mdp">Mot de passe :</label>
        <input class="form-control" type="password" name="mdp" id="mdp" value= <?php echo($unUtilisateur->getMdp())?>></input><br/>
         </div>
         <div class="form-group">
        <label class="col-sm-2 control-label" for="mdp2">Retaper le mot de passe :</label>  <!-- vérification de mots de passe -->
        <input class="form-control" type="password" name="mdp2" id="mdp2" value= <?php echo($unUtilisateur->getMdp())?>></input><br/>
         </div>
    </fieldset>
  <div style="text-align: center ;">
        <input type="submit" class="btn btn-lg btn-primary "  value="Valider" onclick="return valider()"></input><!-- OnClick éxécutera le JS qui testera tout les champ du formulaire. -->
        <input type="button" class="btn btn-lg btn-danger" value="Retour" onclick="history.go(-1)">
  </div>
</form>
<?php
// message de validation de création ou non 
if (isset($this->message)) {
    echo "<strong>" . $this->message . "</strong>";
}

?>
