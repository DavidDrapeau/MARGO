<meta http-equiv="Content-Type" content="text/html" charset="utf-8" /> 

<table class="table table-hover" >
    <thead
    <tr>
        <th>Id Personne </th>
        <th> Nom </th>
        <th> Action </th>
    </tr>
    </thead>
    <?php
    $listePersonnes = $this->lire('lesPersonnes');
    //var_dump($listePersonnes);
    for ($i = 0; $i < count($listePersonnes); $i++) {
        $unePersonne = $listePersonnes[$i];
        ?>               
        <tr>
            <td><?php echo $unePersonne->getId() ?></td>
            <td><?php echo $unePersonne->getNom() ?></td>

            <!-- Afficher les détails du stage -->
            <td><a href="?controleur=AdminPersonnes&action=afficherPersonne&idPersonne=<?php echo $unePersonne->getId() ?>">Détails</a></td>
            <!-- Boutons pour modifiers les informations ou supprimer la personne -->
            <td><a href="?controleur=AdminPersonnes&action=modifierPersonne&idPersonne=<?php echo $unePersonne->getId() ?>">Modifier </a></td> 
            <td><a href="lien.html" >Supprimer</a></td> 

        </tr>

    <?php } ?>





</table>

<nav>
  <ul class="pagination">
    <?php for ($i = 1; $i <= $this->lire('pages'); $i++): ?>
        <li>
            <a href="?controleur=AdminPersonnes&action=listePersonnes&page=<?php echo $i; ?>" 
               <?php if ((isset($_GET['page'])) && ($i == $_GET['page'])) echo 'class="active"' ?> >
                   <?php echo $i; ?>
            </a>
        </li>
        
   
    <?php endfor; ?>  
    </ul>
</nav>


     
