<?php
if (!is_null($this->lire('message'))) {
    echo "<strong>".$this->lire('message')."</strong>";
}
?>


<div class="auth">
		<h2> MARGO | ESPACE ADMIN </h2>
		<hr>
		<form method="POST" action="../public/index.php?controleur=connexion&action=authentifier">
		
                    <label for="login">login :</label>
                    <input type="text" name="login" id="login"></input><br/>
                    <label for="mdp">mot de passe :</label>
                    <input type="password" name="mdp" id="mdp"></input><br/>
                    <input type="submit" value="Valider" ></input><br/>
		</form>
		</div>
