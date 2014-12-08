<?php
if (!is_null($this->lire('message'))) {
    echo "<strong>".$this->lire('message')."</strong>";
}
?>
 <h2> MARGO | Espace d'administration </h2>
    <hr>
<form class="form-horizontal" role="form" method="POST" action="../public/index.php?controleur=connexion&action=authentifier">
   
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="login" id="inputEmail3" placeholder="Login">
    </div>
  </div>
  <div class="form-group">
    <label for="mdp" name="mdp"  class="col-sm-2 control-label">Mot de passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name="mdp" id="mdp" placeholder="Mot de passe">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>
  </div>
</form>