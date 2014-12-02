<meta http-equiv="Content-Type" content="text/html" charset="utf-8" /> 

<form method="post" action=".?controleur=AdminPersonnes&action=listePersonnes">
    <table>
        <tr>
            <th>Id Personne </th>
            <th> Nom </th>
            <th> Action </th>
        </tr>
        <?php
            $listePersonnes = $this->lire('lesPersonnes');
            //var_dump($listePersonnes);
            for($i=0; $i<count($listePersonnes); $i++) {
              $unePersonne=$listePersonnes[$i];
        ?>               
        <tr>
            <td><?php echo $unePersonne->getId() ?></td>
            <td><?php echo $unePersonne->getNom() ?></td>
            
            <!-- Afficher les détails du stage -->
            <td><a href="?controleur=AdminPersonnes&action=afficherPersonne&idPersonne=<?php echo $unePersonne->getId() ?>">Détails</a></td>
        </tr>
            
    <?php  } ?>
 
    </table>
</form>



