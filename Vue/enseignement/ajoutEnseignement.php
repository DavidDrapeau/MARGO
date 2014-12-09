<div class="content-page">
    <h2>Ajouter un enseignement</h2>
    <hr>
    <form action="?controleur=Enseignement&action=validation" method="post">
        <div class="form-group">
        <label class="col-sm-3 control-label">Numero de l'enseignement : </label>
        <input class="form-control"  type="text" name="idEnseignement" />
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label">Nom de l'enseignement : </label>
        <input class="form-control"  type="text" name="libEnseignement" />
        </div>
        <div style="text-align: center">
         <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Valider" />
        <input type="button" class="btn btn-danger  " value="Retour" onclick="history.go(-1)">
           </div>
        </div>
    </form>

</div>
        