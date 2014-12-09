    <nav class="navbar navbar-inverse navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
        
          <a class="navbar-brand" href="?">MARGO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-book"></span> Enseignement <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=Enseignement&action=afficher"> <span class="glyphicon glyphicon-align-left"></span> Liste des enseignements</a></li>
                <li><a href="?controleur=Enseignement&action=ajouter"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter un enseignement</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-bookmark"></span> Filières <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=Filiere&action=afficher"><span class="glyphicon glyphicon-align-left"></span> Liste filières</a></li>
                <li><a href="?controleur=Filiere&action=ajouter"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une filière</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-briefcase"></span> Classes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=Classe&action=show"><span class="glyphicon glyphicon-align-left"></span> Liste classes</a></li>
                <li><a href="?controleur=Classe&action=ajouter"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une Classes</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Personnes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=AdminPersonnes&action=listePersonnes"><span class="glyphicon glyphicon-align-left"></span> Liste Personnes</a></li>
                <li><a href="?controleur=AdminPersonnes&action=creerPersonne"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une Personne</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Promotions <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="?controleur=Promotion&action=afficher"><span class="glyphicon glyphicon-align-left"></span> Liste Promotion</a></li>
                <li><a href="?controleur=Promotion&action=ajouter"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une Promotion</a></li>
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
             
            <li><a  href="<?php echo "../public/index.php?controleur=connexion&action=seDeconnecter"; ?>"> <span class="glyphicon glyphicon-off" ></span> Deconnexion  </a></li>
                <li><a  href="../public/index.php?controleur=connexion&action=monCompte" class="settings"> <span class="glyphicon glyphicon-wrench"> </span>  Mon compte  </a></li>
                <?php
            }
            ?>
         
        </div><!--/.nav-collapse -->
      </div>
    </nav>
