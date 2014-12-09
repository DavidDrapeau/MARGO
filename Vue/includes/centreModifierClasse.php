<div class="content-page">

    <h2>Modifier la classe</h2>
 
    <hr>
    
    <form action="?controleur=Classe&action=update" method="post">
        <?php   foreach ($this->lire('laClasse') as $classe) { ?>
        <input  type="hidden" name="numClass" value="<?php echo $classe->getNumClass() ;?> " />
        <div class="form-group">
            <label class="col-sm-2 control-label">Numero de la classe : </label>
            <input class="form-control" type="text" name="numClass" value="<?php echo $classe->getNumClass() ;?> " disabled="disabled"/>
        </div>
        
         <div class="form-group">
            <label class="col-sm-2 control-label">Nom de la classe </label>
            <input class="form-control" type="text" name="nameClasse" value="<?php echo $classe->getNomClasse() ;?>"   />
         </div>
        
         <div class="form-group">
             <label class="col-sm-2 control-label">Spécialité </label>
             <input class="form-control" type="text" name="speClasse" value="<?php echo $classe->getIdSpec() ;?>"  />
         </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Filière </label>
            <input class="form-control" type="text" name="numFiliere" value="<?php echo $classe->getNumFiliere() ;?>"  />
         </div>
        
      
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Valider" />
            <input type="button" class="btn btn-danger" value="Retour" onclick="history.go(-1)">
     
        </div>
     
       
        <?php
        }
        ?>
     
    </form>
    
</div>
        