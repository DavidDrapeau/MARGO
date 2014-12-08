<div class="content-page">

    <h2>Details enseignement</h2>
 
    <hr>
    
    <form action="?controleur=Enseignement&action=validation" method="post">
        <?php   foreach ($this->lire('lenseignement') as $enseignement) { ?>
        
        <label>Numero de la l'enseignement : </label><span class="pushNum"></span><input  type="text" name="idEnseignement" value="<?php echo $enseignement->getIdEnseignement() ;?> " disabled="disabled"/><br>
        <label>Libellé de l'enseignement </label><span  class="pushName"></span><input  type="text" name="libEnseignement" value="<?php echo $enseignement->getLibEnseignement() ;?>"  disabled="disabled" l /><br>
        <br><br> 

        <?php
        }
        ?>
        
    </form>
    
</div>
        