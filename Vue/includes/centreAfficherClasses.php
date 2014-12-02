<div class="">
<table>
  <tr>
    <td>Numero de la classe</td>

    <td>Libélé de la classe</td>
 
    <td>Action</td>
  </tr>
  
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