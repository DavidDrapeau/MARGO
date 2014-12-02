<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<?php 
$unUtilisateur = $this->lire('utilisateur');
?>
    <h1>Informations personnelles</h1>
    <fieldset>
        <legend>Informations</legend>
            <label for="id">ID Personne :</label>
        <input type="text"  readonly="readonly" name="id" id="id" value="<?php if(!is_null($unUtilisateur->getId())){echo $unUtilisateur->getId();}; ?>"></input><br/>
            <label for="role">Role :</label>
        <input type="text" name="role" id="role" value="<?php if(!is_null($unUtilisateur->getRole()->getLibelle())){echo $unUtilisateur->getRole()->getLibelle();}; ?>"></input><br/>
            <label for="civilite">Civilit&eacute; :</label>
        <input type="text"  name="civilite" id="civilite" value="<?php if(!is_null($unUtilisateur->getCivilite())){echo $unUtilisateur->getCivilite();}; ?>"></input><br/>
            <label for="nom">Nom :</label>
        <input type="text"  name="nom" id="nom" value="<?php if(!is_null($unUtilisateur->getNom())){echo $unUtilisateur->getNom();}; ?>"></input><br/>
            <label for="prenom">Pr&eacute;nom :</label>
        <input type="text"  name="prenom" id="mdp" value="<?php if(!is_null($unUtilisateur->getPrenom())){echo $unUtilisateur->getPrenom();}; ?>"></input><br/>
            <label for="mail">E-Mail :</label>
        <input type="text"  name="mail" id="mail" value="<?php if(!is_null($unUtilisateur->getMail())){echo $unUtilisateur->getMail();}; ?>"></input><br/>
            <label for="tel">Tel :</label>
        <input type="text"  name="tel" id="tel" value="<?php if(!is_null($unUtilisateur->getNumTel())){echo $unUtilisateur->getNumTel();}; ?>"></input><br/>
            <label for="tel">Tel portable:</label>
        <input type="text"  name="telMobile" id="telMobile" value="<?php if(!is_null($unUtilisateur->getMobile())){echo $unUtilisateur->getMobile();}; ?>"></input><br/>
            <label for="etudes">Etudes :</label>
        <input type="text"  name="etudes" id="etudes" value="<?php if(!is_null($unUtilisateur->getEtudes())){echo $unUtilisateur->getEtudes();}; ?>"></input><br/>
            <label for="formation">Formation :</label>
        <input type="text"  name="formation" id="formation" value="<?php if(!is_null($unUtilisateur->getFormation())){echo $unUtilisateur->getFormation();}; ?>"></input><br/>
            <label for="specialite">Sp&eacute;cialit&eacute; :</label>
        <input type="text" name="specialite" id="specialite" value="<?php if(!is_null($unUtilisateur->getSpecialite())){echo $unUtilisateur->getSpecialite()->getLibelleLong();}; ?>"></input><br/>
        
            <input type="button" name="Val" value="Valider" onclick="self.location.href='lien.html'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick>
            <input type="button" name="Annul" value="Annuler" onclick="self.location.href='?controleur=AdminPersonnes&action=afficherPersonne&idPersonne=<?php echo $unUtilisateur->getId() ?>'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick>
    </fieldset>
    
    <?php
if (!is_null($this->lire('message'))) {
    echo "<strong>".$this->lire('message')."</strong>";
}
?>