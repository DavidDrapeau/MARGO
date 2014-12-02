<div class="content-page">

    <h2>Modifier la classe</h2>
 
    <hr>
    
    <form action="?controleur=Classe&action=update" method="post">
        <?php   foreach ($this->lire('laClasse') as $classe) { ?>
         <input  type="hidden" name="numClass" value="<?php echo $classe->getNumClass() ;?> " />
        <label>Numero de la classe : </label><span class="pushNum"></span><input  type="text" name="numClass" value="<?php echo $classe->getNumClass() ;?> " disabled="disabled"/><br>
        <label>Nom de la classe </label><span  class="pushName"></span><input  type="text" name="nameClasse" value="<?php echo $classe->getNomClasse() ;?>"   /><br>
        <label>Spécialité </label><span  class="pushSpe"></span><input type="text" name="speClasse" value="<?php echo $classe->getIdSpec() ;?>"  /><br>
       
        <label>Filière </label><span  class="pushFiliere"></span><input type="text" name="numFiliere" value="<?php echo $classe->getNumFiliere() ;?>"  /><br />
        
        <input type="submit" />
        <br><br> 

        <?php
        }
        ?>
        
    </form>
    
</div>
        