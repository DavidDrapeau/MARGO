<div class="content-page">

    <h2>Ajouter une classe</h2>
 
    <hr>
    
    <form action="?controleur=Classe&action=validation" method="post">
        <?php   foreach ($this->lire('laClasse') as $classe) { ?>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Numero de la classe : </label><span class="pushNum"></span>
            <input  type="text" name="numClass" value="<?php echo $classe->getNumClass() ;?> " disabled="disabled"/>
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Nom de la classe </label><span  class="pushName">
            <input  type="text" name="nameClasse" value="<?php echo $classe->getNomClasse() ;?>"  disabled="disabled"  />
        
        </div>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Spécialité </label><span  class="pushSpe"></span><input type="text" name="idClasse" value="<?php echo $classe->getIdSpec() ;?>"  disabled="disabled"/><br>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Filière </label><span  class="pushFiliere"></span><input type="text" name="nameClasse" value="<?php echo $classe->getNumFiliere() ;?>" disabled="disabled" />
        </div>
    
        <br><br> 

        <?php
        }
        ?>
        
    </form>
    
</div>
        