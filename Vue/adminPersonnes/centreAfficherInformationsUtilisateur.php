<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<?php 
$unUtilisateur = $this->lire('utilisateur');
?>
<form method ="post" action=".?controleur=AdminPersonnes&action=modifierPersonne" name=ReadPerson>
    <h1>Informations personnelles</h1>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="id">ID Personne :</label>
        <input class="form-control" type="text" readonly="readonly" name="id" id="id" value="<?php if(!is_null($unUtilisateur->getId())){echo $unUtilisateur->getId();}; ?>"></input>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="role">Role :</label>
        <input class="form-control" type="text" readonly="readonly" name="role" id="role" value="<?php if(!is_null($unUtilisateur->getRole()->getLibelle())){echo $unUtilisateur->getRole()->getLibelle();}; ?>"></input>
    </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="civilite">Civilit&eacute; :</label>
        <input class="form-control" type="text" readonly="readonly" name="civilite" id="civilite" value="<?php if(!is_null($unUtilisateur->getCivilite())){echo $unUtilisateur->getCivilite();}; ?>"></input>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="nom">Nom :</label>
        <input class="form-control" type="text" readonly="readonly" name="nom" id="nom" value="<?php if(!is_null($unUtilisateur->getNom())){echo $unUtilisateur->getNom();}; ?>"></input>
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="prenom">Pr&eacute;nom :</label>
        <input class="form-control" type="text" readonly="readonly" name="prenom" id="mdp" value="<?php if(!is_null($unUtilisateur->getPrenom())){echo $unUtilisateur->getPrenom();}; ?>"></input>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="mail">E-Mail :</label>
        <input class="form-control" type="text" readonly="readonly" name="mail" id="mail" value="<?php if(!is_null($unUtilisateur->getMail())){echo $unUtilisateur->getMail();}; ?>"></input>
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="tel">Tel :</label>
        <input class="form-control" type="text" readonly="readonly" name="tel" id="tel" value="<?php if(!is_null($unUtilisateur->getNumTel())){echo $unUtilisateur->getNumTel();}; ?>"></input>
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="tel">Tel portable:</label>
        <input class="form-control" type="text" readonly="readonly" name="telMobile" id="telMobile" value="<?php if(!is_null($unUtilisateur->getMobile())){echo $unUtilisateur->getMobile();}; ?>"></input>
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="etudes">Etudes :</label>
        <input class="form-control" type="text" readonly="readonly" name="etudes" id="etudes" value="<?php if(!is_null($unUtilisateur->getEtudes())){echo $unUtilisateur->getEtudes();}; ?>"></input>
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="formation">Formation :</label>
        <input class="form-control" type="text" readonly="readonly" name="formation" id="formation" value="<?php if(!is_null($unUtilisateur->getFormation())){echo $unUtilisateur->getFormation();}; ?>"></input>
         </div>
        <div class="form-group">
        <label class="col-sm-2 control-label" for="specialite">Sp&eacute;cialit&eacute; :</label>
        <input class="form-control" type="text" readonly="readonly" name="specialite" id="specialite" value="<?php if(!is_null($unUtilisateur->getSpecialite())){echo $unUtilisateur->getSpecialite()->getLibelleLong();}; ?>"></input>
        </div>
</form>
   
<?php
if (!is_null($this->lire('message'))) {
    echo "<strong>".$this->lire('message')."</strong>";
}
?>
