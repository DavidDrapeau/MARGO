<table>
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
                    <a href="">Afficher</a>
                    <a href="">Editer</a>
                    <a href="">Supprimer</a>
                </td>
            </tr>

<?php
}
?>

    </tbody>
</table>