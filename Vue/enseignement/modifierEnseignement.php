<div class="content-page">

    <h2>Modifier enseignement</h2>
 
    <hr>
    
    <form action="?controleur=Enseignement&action=update" method="post">
        <?php   foreach ($this->lire('lenseignement') as $enseignement) { ?>
           <div class="form-group">
        <label class="col-sm-3 control-label">Numero de la l'enseignement : </label>
        <input class="form-control" type="text" name="idEnseignement" value="<?php echo $enseignement->getIdEnseignement() ;?> " disabled="disabled"/>
           </div>
         <div class="form-group">
        <label class="col-sm-3 control-label">Libellé de l'enseignement </label>
        <input class="form-control" type="text" name="libEnseignement" value="<?php echo $enseignement->getLibEnseignement() ;?>"  />
         </div>
        <input  type="hidden" name="idEnseignement" value="<?php echo $enseignement->getIdEnseignement() ;?> " />
       
        <div class="form-group">
            <div style="text-align:center ;">
         <input type="submit" class="btn btn-primary" value="Valider" />
            <input type="button" class="btn btn-danger" value="Retour" onclick="history.go(-1)">
            </div>
        </div>

        <?php
        }
        ?>
        
    </form>
    
</div>
        