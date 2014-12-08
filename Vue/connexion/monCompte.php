<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<h3>Bienvenue sur le site du centre de Formation Margo</h3>

<h1>Mon compte</h1>

Informations Personelles:

<p> Login: <?php echo MaSession::get('login') ?> </p>
<p> Role: <?php echo MaSession::get('role') ?></p>