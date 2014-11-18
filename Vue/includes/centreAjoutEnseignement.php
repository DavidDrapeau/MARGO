<div class="content-page">
    <h2>Ajouter une matière</h2>
    <form action="?controler=Enseignement&action=validation" method="post">
        <label>Numero de la classe : </label><input type="text" name="numClass" /><br>
        <label>Nom de la classe </label><input type="text" name="nameClasse" />
        <label>Filière </label>
        <select name="filiere">
        <option value=""></option>
        
          <?php
    
            // remplissage du "SELECT" qui contien les roles
          
            foreach ($this->lireDonnee('listeClasse') as $classe) {
             
              
                echo'<option value="' . $classe->getNumClass() . '">' . $classe->getNumClass() . '</option>';
            }
            ?>  
         </select>
        
        
    </form>
    
</div>
        