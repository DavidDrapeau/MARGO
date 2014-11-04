<ul class="menugauche">
    <p><b>Menu</b></p>
    <li><a href="<?php echo RACINE; ?>/public/index.php" >Accueil</a></li>
    <hr/>
    <b>Nos produits</b>
    <li><a href="<?php echo RACINE; ?>/public/index.php?action=afficherTous" >Tous</a></li>
<?php
    $listeCateg = $this->lire('listeCateg');
    foreach ($listeCateg as $categ) {
        echo "<li><a href=\"".RACINE."/public/index.php?controleur=Produit&action=afficherUneCateg&id=".$categ->getCode()."\" >".$categ->getLibelle()."</a></li>";
    }
?>
</ul>
