<div class="content-page">

    <h2>Ajouter une classe</h2>
 
    <hr>
    
    <form action="?controleur=Classe&action=validation" method="post">
        <?php   foreach ($this->lire('laClasse') as $classe) { ?>
         <label>Numero de la classe : </label><span class="pushNum"></span><input  type="text" name="numClass" value="<?php echo $classe->getNumClass() ;?> " disabled="disabled"/><br>
        <label>Nom de la classe </label><span  class="pushName"></span><input  type="text" name="nameClasse" value="<?php echo $classe->getNomClasse() ;?>"  disabled="disabled" l /><br>
        <label>Spécialité </label><span  class="pushSpe"></span><input type="text" name="idClasse" value="<?php echo $classe->getIdSpec() ;?>"  disabled="disabled"/><br>
       
        <label>Filière </label><span  class="pushFiliere"></span><input type="text" name="nameClasse" value="<?php echo $classe->getNumFiliere() ;?>" disabled="disabled" />
        
    
        <br><br> 

        <?php
        }
        ?>
        
    </form>
    
</div>
        