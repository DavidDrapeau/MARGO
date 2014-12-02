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