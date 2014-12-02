<?php
    // message de validation de création ou non 
    if (!is_null($this->lire('message'))) {
        foreach ($this->lire('message') as $message){
            echo "<strong style=\"color:red;\">" .  $message. "</strong></br>";
        }
        
    }
    ?>


<div class="content-page">
    <h2>Ajouter d'une filière</h2>
    <hr>
    <form action="?controleur=Filiere&action=valider" method="post">      
        <label>Nom de la Filière </label><span></span><input type="text" name="nomFiliere" /><br>      
        
        <input type="submit" value="Valider" />
        
        
    </form>
    
</div>
        
