<div class="content-page">

    <h2>Modifier enseignement</h2>
 
    <hr>
    
    <form action="?controleur=Enseignement&action=update" method="post">
        <?php   foreach ($this->lire('lenseignement') as $enseignement) { ?>
        <label>Numero de la l'enseignement : </label><span class="pushNum"></span><input  type="text" name="idEnseignement" value="<?php echo $enseignement->getIdEnseignement() ;?> " disabled="disabled"/><br>
        <label>Libellé de l'enseignement </label><span  class="pushName"></span><input  type="text" name="libEnseignement" value="<?php echo $enseignement->getLibEnseignement() ;?>"  /><br>
        <input  type="hidden" name="idEnseignement" value="<?php echo $enseignement->getIdEnseignement() ;?> " />
        <input type="submit" />
        <br><br> 

        <?php
        }
        ?>
        
    </form>
    
</div>
        