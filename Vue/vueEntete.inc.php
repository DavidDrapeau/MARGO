<body>
    <header>
        <div class="logo"> 
            <h1> MARGO </h1> 
        </div>
        <div class="title-page">
            <h2>Centre De formation</h2>
            <ul>
            <?php
                


            if (is_null($this->lire('loginAuthentification'))) {
                ?>
                <li><a href="<?php echo "../public/index.php?controleur=connexion&action=seConnecter\""; ?>" >Connexion </a></li>
            <?php } else {
                ?>
                <li><a href="<?php echo "../public/index.php?controleur=connexion&action=seDeconnecter\""; ?>" >Deconnexion  </a></li>
                <li><a href="#" class="settings"> <span class="glyphicon glyphicon-wrench"> </span>  Mon compte | </a></li>
                <?php
            }
            ?>


                
                

            </ul>
            </p>
        </div>


    </header>