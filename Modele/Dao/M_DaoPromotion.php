<?php

class M_DaoPromotion extends M_DaoGenerique{
    
    function __construct() {
        $this->nomTable = "PROMOTION";
    }

    public function enregistrementVersObjet($unEnregistrement) {
        $retour = new M_Promotion($enreg['ANNEESCOL'], $enreg['IDPERSONNE'], $enreg['NUMCLASSE']);
        return $retour;
    }

    public function insert($objetMetier) {
        return FALSE;
    }

    public function objetVersEnregistrement($objetMetier) {
        // construire un tableau des paramètres d'insertion ou de modification
        // l'ordre des valeurs est important : il correspond à celui des paramètres de la requête SQL
        $retour = array(
            ':anneeScol' => $objetMetier->getAnneescol(),
            ':idPersonne' => $objetMetier->getIdPersonne(),
            ':numClasse' => $objetMetier->getNumclasse()
        );
        return $retour;
    }

    public function update($idMetier, $objetMetier) {
        return FALSE;
    }
    
    /**
     * Fonction delete
     */
    function delete($idMetier) {
        $retour = FALSE;
        try {
            // Requête textuelle paramétrée 
            $sql = "DELETE FROM $this->nomTable INNER JOIN PERSONNE ON PERSONNE.IDPERSONNE = PROMOTION.IDPERSONNE WHERE PROMOTION.IDPERSONNE = :id";
            // préparer la  liste des paramètres (1 seul)
            $parametres = array(':id'=>$idMetier);
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête avec les valeurs des paramètres (il n'y en a qu'un ici) dans un tableau
            $retour = $queryPrepare->execute($parametres);
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }  

}

