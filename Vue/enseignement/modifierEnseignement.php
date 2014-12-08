<?php
    // message de validation de création ou non 
    if (!is_null($this->lire('message'))) {
        foreach ($this->lire('message') as $message){
            echo "<strong style=\"color:red;\">" .  $message. "</strong></br>";
        }
        
    }
    
    
    ?>

;
<div class="content-page">
    <h2>Modification d'une filière</h2>
    <hr>
    <form action="?controleur=Filiere&action=validerModification&idEnseignement=<?php echo $this->lire('enseignement')->getIdEnseignement(); ?>" method="post">    
        <label>ID de l'enseignement </label><span></span><input type="text"  disabled="disabled" name="nomEnseignement" value="<?php echo $this->lire('enseignement')->getIdEnseignement() ;?>"/><br>      
        <label>Nom de l'enseignement </label><span></span><input type="text" name="nomEnseignement"  value="<?php echo $this->lire('enseignement')->getLibEnseignement() ;?>"/><br>      
        
        <input type="submit" value="Valider" />
        
        
    </form>
    
</div>