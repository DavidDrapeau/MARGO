<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<div class="jumbotron">
    <div class="container">
        <h1>Mon compte</h1>
    </div>
</div>

    <div class="presentation">
        <h3>Informations Personelles:</h3>
        <hr>
        <p> Login: <?php echo MaSession::get('login') ?> </p>
        <p> Role: <?php echo MaSession::get('role') ?></p>
    </div>