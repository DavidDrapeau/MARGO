<div class="container ">

    <h2>Ajouter une classe</h2>
 
    <hr>
    <form action="?controleur=Classe&action=validation" method="post">
         <div class="form-group">
            <label class="col-sm-2 control-label" >Numero de la classe : </label><span class="pushNum">
            <input class="form-control" type="text" name="numClass" /><br>
         </div>
         <div class="form-group">
            <label class="col-sm-2 control-label" >Nom de la classe </label>
            <input class="form-control" type="text" name="nameClasse" /><br>
         </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" >Filière </label><span  class="pushFiliere"></span>
            <select name="filiere">
          
            <option value=""></option>
        
             <?php
    
            // remplissage du "SELECT" qui contien les roles
          
            foreach ($this->lire('listeFiliere') as $filiere) {
             
              
                echo'<option type="number"value="' . $filiere->getNumFiliere() . '">' . $filiere->getLibFiliere() . '</option>';
            }
             ?>  
             </select>
        </div>
        <br><br> 
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Valider" />
        </div>
        
    </form>
    
</div>
        