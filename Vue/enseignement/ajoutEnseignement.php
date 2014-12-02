<div class="content-page">
    <h2>Ajouter un enseignement</h2>
    <form action="?controleur=Enseignement&action=validation" method="post">
        <label>Numero de l'enseignement : </label><input type="text" name="idEnseignement" /><br>
        <label>Nom de l'enseignement : </label><input type="text" name="libEnseignement" />
        
        <br><br> 
        <input type="submit" value="Valider" />
        <input type="button" value="Retour" onclick="history.go(-1)">
    </form>

</div>
        