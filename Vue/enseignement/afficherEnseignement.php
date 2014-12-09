<?php $mess=$this->lire('message') ;  ?>

<?php if($mess!=null) 
{
    ?>

<div class="alert alert-success" style="text-align: center;"><p><?php echo $this->lire('message') ;?></p></div>
<?php } ?>
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
foreach ($this->lire('enseignements') as $enseignement)
{
?>
      <tr>
                <td>
                    <?php echo $enseignement->getIdEnseignement(); ?> 
                </td>
                <td>
                    <?php echo $enseignement->getLibEnseignement(); ?> 
                </td>
                
                <td>
                    <a href="?controleur=Enseignement&action=showByID&idEnseignement=<?php echo $enseignement->getIdEnseignement() ; ?>">Afficher</a>
                    <a href="?controleur=Enseignement&action=updateById&idEnseignement=<?php echo $enseignement->getIdEnseignement() ; ?>">Editer</a>
                    <a href="?controleur=Enseignement&action=deleteById&idEnseignement=<?php echo $enseignement->getIdEnseignement() ; ?>">Supprimer</a>
                </td>
            </tr>

<?php
}
?>

    </tbody>
</table>