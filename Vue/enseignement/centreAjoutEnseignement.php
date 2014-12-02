<div class="content-page">
    <h2>Ajouter un enseignement</h2>
    <form action="?controler=Enseignement&action=validation" method="post">
        <label>Numero de l'enseignement : </label><input type="text" name="numClass" /><br>
        <label>Nom de l'enseignement : </label><input type="text" name="nameClasse" />
        
    </form>
    <fieldset>
        <input type="submit" value="Creer" onclick="return valider()"></input><!-- OnClick éxécutera le JS qui testera tout les champ du formulaire. -->
        <input type="button" value="Retour" onclick="history.go(-1)">
    </fieldset>
</div>
        