
    
    <?php
    // message de validation de création ou non 
    if (!is_null($this->lire('message'))) {
        foreach ($this->lire('message') as $message){
           ?>
    <div class="alert alert-danger" role="alert"><?php echo $message ; ?></div>
    <?php
        }
        
    }
    
   
    ?>

<div class="container">
    <h2>Ajouter d'une filière</h2>
    <hr>
    <form role="form" action="?controleur=Filiere&action=valider" method="post">    
        <div class="form-group">
        <label class="col-sm-2 control-label">Nom de la Filière </label>
        <div class="col-sm-5">
        <input class="form-control" type="text" name="nomFiliere" /><br>      
        </div>
        </div>
        
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Valider" class="btn btn-primary"/>
        </div>
        </div>
        
    </form>
    
</div>
        
