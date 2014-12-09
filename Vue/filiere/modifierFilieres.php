
    
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
    <h2>Modification d'une filière</h2>
    <hr>
    <form role="form" action="?controleur=Filiere&action=validerModification&idFiliere=<?php echo $this->lire('filiere')->getNumFiliere(); ?>" method="post">    
        <div class="form-group">
            <label class="col-sm-2 control-label" >ID de la Filière </label>
          
                <input type="text"  class="form-control" disabled="disabled" name="nomFiliere" value="<?php echo $this->lire('filiere')->getNumFiliere() ;?>"/>
           
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" >Nom de la Filière </label>
             
                <input type="text" class="form-control" name="nomFiliere"  value="<?php echo $this->lire('filiere')->getLibFiliere() ;?>"/><br>      
           
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Valider" />
            <input type="button" class="btn btn-danger" value="Retour" onclick="history.go(-1)">
     
        </div>
 
        
    </form>
    
</div>
        
