<div class="container">
    <h2> Liste des Promotions </h2>
    <hr>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ANNEESCOL</th>
            <th>IDPERSONNE</th>
            <th>NUMCLASSE</th>             	
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($this->lire('promotions') as $promotion)
{
?>
      <tr>
                <td>
                    <?php echo $promotion->getAnnescol(); ?> 
                </td>
                <td>
                    <?php echo $promotion->getIdPersonne(); ?> 
                </td>
                <td>
                    <?php echo $promotion->getNumclasse(); ?> 
                </td>
                
                <td>
                   
                   
                </td>
            </tr>

<?php
}
?>

    </tbody>
</table>
</div>