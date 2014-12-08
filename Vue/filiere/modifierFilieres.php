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
    <form action="?controleur=Filiere&action=validerModification&idFiliere=<?php echo $this->lire('filiere')->getNumFiliere(); ?>" method="post">    
        <label>ID de la Filière </label><span></span><input type="text"  disabled="disabled" name="nomFiliere" value="<?php echo $this->lire('filiere')->getNumFiliere() ;?>"/><br>      
        <label>Nom de la Filière </label><span></span><input type="text" name="nomFiliere"  value="<?php echo $this->lire('filiere')->getLibFiliere() ;?>"/><br>      
        
        <input type="submit" value="Valider" />
        
        
    </form>
    
</div>
        
