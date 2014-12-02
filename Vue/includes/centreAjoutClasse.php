<div class="content-page">

    <h2>Ajouter une classe</h2>
 
    <hr>
    <form action="?controleur=Classe&action=validation" method="post">
        <label>Numero de la classe : </label><span class="pushNum"></span><input type="text" name="numClass" /><br>
        <label>Nom de la classe </label><span  class="pushName"></span><input type="text" name="nameClasse" /><br>
       
        <label>Filière </label><span  class="pushFiliere"></span>
        <select name="filiere">
          
        <option value=""></option>
        
          <?php
    
            // remplissage du "SELECT" qui contien les roles
          
            foreach ($this->lire('listeFiliere') as $filiere) {
             
              
                echo'<option type="number"value="' . $filiere->getNumFiliere() . '">' . $filiere->getLibFiliere() . '</option>';
            }
            ?>  
         </select>
        <br><br> 
        <input type="submit" value="Valider" />
        
        
    </form>
    
</div>
        