<?php
    // message de validation de création ou non 
    if (!is_null($this->lire('message'))) {
        foreach ($this->lire('message') as $message){
            echo "<strong style=\"color:red;\">" .  $message. "</strong></br>";
        }
        
    }
    ?>

<div class="container">
    <h2>Ajouter d'une Promotion</h2>
    <hr>
    <form role="form" action="?controleur=Promotion&action=valider" method="post"> 
         <div class="form-group">            
            <label class="col-sm-2 control-label" for="annee">Annee Scolaire</label>
            <select  name="annee" id="annee">
                <option value=""></option>

                <?php
                // remplissage du "SELECT" qui contien les roles
                foreach ($this->lire('anneeScolaire') as $annee) {
                    echo'<option value="' . $annee->getAnneeScol() . '">' . $annee->getAnneeScol() . '</option>';
                }
                ?>  
            </select>
        </div>
        
        <div class="form-group">            
            <label class="col-sm-2 control-label" for="personne">Personne</label>
            <select  name="personne" id="personne">
                <option value=""></option>

                <?php
                // remplissage du "SELECT" qui contien les roles
                foreach ($this->lire('personnes') as $personne) {
                    echo'<option value="' . $personne->getId() . '">' . $personne->getNom() .' '.$personne->getPrenom(). '</option>';
                }
                ?>  
            </select>
        </div>
        
        <div class="form-group">            
            <label class="col-sm-2 control-label" for="classe">Nom de la classe</label>
            <select  name="classe" id="classe">
                <option value=""></option>

                <?php
                // remplissage du "SELECT" qui contien les roles
                foreach ($this->lire('classes') as $classe) {
                    echo'<option value="' . $classe->getNomClasse() . '">' . $classe->getNomClasse(). '</option>';
                }
                ?>  
            </select>
        </div>
        
        
      
       
        
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Valider" class="btn btn-primary"/>
        </div>
        </div>
        
    </form>
    
</div>
        
