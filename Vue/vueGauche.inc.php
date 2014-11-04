<nav>
    <div class="nav-bar">
        <h3> Menu Principal</h3>
        <ul>
            <b>Admin</b>

            <?php
                $loginAuthentification = SessionAuthentifiee::estAuthentifie(array('login'));


            if ($loginAuthentification == null) {
                ?>
                <li><a href="<?php echo RACINE . "/public/index.php?controleur=connexion&action=seConnecter\""; ?>" >Connexion </a></li>
            <?php } else {
                ?>
                <li><a href="<?php echo RACINE . "/public/index.php?controleur=connexion&action=seDeconnecter\""; ?>" >Deconnexion  </a></li>
                <?php
            }
            ?>
            <li><span class="glyphicon glyphicon-home"> </span> <a href="#">Accueil</a></li>
            <li><span class="glyphicon glyphicon-bookmark"> </span> <a href="#">Enseignements</a></li>
            <li><span class="glyphicon glyphicon-tasks"> </span> <a href="#">Filières</a></li>
            <li><span class="glyphicon glyphicon-briefcase"> </span> <a href="#">Classes</a></li>
            <li><span class="glyphicon glyphicon-user"> </span> <a href="">Elèves</a></li>
        </ul>
    </div>
</nav>