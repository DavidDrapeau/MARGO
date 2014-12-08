<div class="alert-message"><p><?php echo $this->lire('message') ;?></p></div>
<div class="showClasse">
    <h2> Liste des Classes </h2>
    <hr>
    <br />
<table class="table table-hover">
  <thead>
        <tr>
            <th>Id</th>
            <th>Libellé</th>                       
            <th>Actions</th>
        </tr>
    </thead>
  
  <?php foreach ($this->lire('listeClasses') as $classe)
  {
      ?>
  
  <tr>
    <td><?php echo $classe->getNumClass() ; ?></td>
    <td><?php echo $classe->getNomClasse(); ?></td>
    <td><a href="?controleur=Classe&action=showByID&idClasse=<?php echo $classe->getNumClass() ; ?>"> Afficher </a> | <a href="?controleur=Classe&action=updateById&idClasse=<?php echo $classe->getNumClass() ; ?>">Modifier</a> | <a href="?controleur=Classe&action=deleteById&idClasse=<?php echo $classe->getNumClass() ; ?>">Supprimer </a>   </td>
  </tr>


<?php

  }
  ?>
</table>
</div>

