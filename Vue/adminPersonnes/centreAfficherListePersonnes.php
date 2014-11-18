<meta http-equiv="Content-Type" content="text/html" charset="utf-8" /> 

<form method="post" action=".?controleur=AdminPersonness&action=listePersonnes">
    <table>
        <tr>
            <th>Id Personne </th>
            <th> Nom </th>
<!--            <th> Id Specialite </th>-->
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
<!--            <td><?php echo $unePersonne->getSpecialite()?></td>-->
        </tr>
            
    <?php  } ?>
 
    </table>
</form>



