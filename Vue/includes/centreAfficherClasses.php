<?php $mess=$this->lire('message') ;  
$role=$this->lire('role') ;
?>
<?php if($mess!=null) 
{
    ?>
    <?php if($role)
    {
    ?>
  <div class="alert alert-success" style="text-align: center;"><p><?php echo $this->lire('message') ;?></p></div>
  <?php
}else {
 ?> 
  <div class="alert alert-danger" style="text-align: center;"><p><?php echo $this->lire('message') ;?></p></div>
  <?php
}
?>
<?php } ?>

<div class="showClasse">
    <h2> Liste des Classes</h2>
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

<a href="?controleur=Classe&action=ajouter"><button type="button" class="btn btn-primary">Ajouter une classe</button></a>

