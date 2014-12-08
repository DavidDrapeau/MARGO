    <nav class="navbar navbar-inverse navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
        
          <a class="navbar-brand" href="?">MARGO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Enseignement <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=Enseignement&action=afficher">Liste des enseignements</a></li>
                <li><a href="?controleur=Enseignement&action=ajouter">Ajouter un enseignement</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Filières <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=Filiere&action=afficher">Liste filières</a></li>
                <li><a href="?controleur=Filiere&action=ajouter">Ajouter une filière</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Classes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=Classe&action=show">Liste classes</a></li>
                <li><a href="?controleur=Classe&action=ajouter">Ajouter une Classes</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Personnes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=AdminPersonnes&action=listePersonnes">Liste Personnes</a></li>
                <li><a href="?controleur=AdminPersonnes&action=creerPersonne">Ajouter une Personne</a></li>
              </ul>
            </li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
      <?php 
        if (is_null($this->lire('loginAuthentification'))) {
                ?>
        <li><a  href="<?php echo "../public/index.php?controleur=connexion&action=seConnecter"; ?>" >Se connecter </a></li></ul>
            <?php } else {
                ?>
                <li><a  href="<?php echo "../public/index.php?controleur=connexion&action=seDeconnecter"; ?>" >Deconnexion  </a></li>
                <li><a  href="../public/index.php?controleur=connexion&action=monCompte" class="settings"> <span class="glyphicon glyphicon-wrench"> </span>  Mon compte  </a></li>
                <?php
            }
            ?>
         
        </div><!--/.nav-collapse -->
      </div>
    </nav>
