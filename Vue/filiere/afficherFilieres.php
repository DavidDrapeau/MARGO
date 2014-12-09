<?php $mess=$this->lire('message') ;  ?>

<?php if($mess!=null) 
{
    ?>

<div class="alert alert-success" style="text-align: center;"><p><?php echo $this->lire('message') ;?></p></div>
<?php } ?>

<div class="container">
    <h2> Liste des Filières </h2>
    <hr>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Libellé</th>                       
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($this->lire('filieres') as $filiere)
{
?>
      <tr>
                <td>
                    <?php echo $filiere->getNumFiliere(); ?> 
                </td>
                <td>
                    <?php echo $filiere->getLibFiliere(); ?> 
                </td>
                
                <td>
                   
                    <a href="?controleur=Filiere&action=editer&idFiliere=<?php echo $filiere->getNumFiliere(); ?>">Editer</a>
                    <a href="?controleur=Filiere&action=supprimer&idFiliere=<?php echo $filiere->getNumFiliere(); ?>">Supprimer</a>
                </td>
            </tr>

<?php
}
?>

    </tbody>
</table>
</div>