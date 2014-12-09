<div class="content-page">
    
    <form action="?controleur=Classe&action=validation" method="post">
        <?php   foreach ($this->lire('laClasse') as $classe) { ?>
         <h2>Détail de la classe <?php echo $classe->getNumClass() ;?> </h2>
         <hr>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Numero de la classe : </label>
            <input class="form-control" type="text" name="numClass" value="<?php echo $classe->getNumClass() ;?> " disabled="disabled"/>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Nom de la classe </label>
            <input  class="form-control" type="text" name="nameClasse" value="<?php echo $classe->getNomClasse() ;?>"  disabled="disabled"  />
        
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Spécialité </label><input class="form-control" type="text" name="idClasse" value="<?php echo $classe->getIdSpec() ;?>"  disabled="disabled"/>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Filière </label><input class="form-control" type="text" name="nameClasse" value="<?php echo $classe->getNumFiliere() ;?>" disabled="disabled" />
        </div>
    
          
        <div class="form-group">
            <div style="text-align:center ;">
         
            <input type="button" class="btn btn-danger" value="Retour" onclick="history.go(-1)">
            </div>
        </div>

        <?php
        }
        ?>
        
    </form>
    
</div>
        