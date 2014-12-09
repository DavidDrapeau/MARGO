<?php

class M_DaoPromotion extends M_DaoGenerique{
    
    function __construct() {
        $this->nomTable = "PROMOTION";
    }

    public function enregistrementVersObjet($enreg) {
        $retour = new M_Promotion($enreg['ANNEESCOL'], $enreg['IDPERSONNE'], $enreg['NUMCLASSE']);
        return $retour;
    }
     
    public function objetVersEnregistrement($objetMetier) {
        // construire un tableau des paramètres d'insertion ou de modification
        // l'ordre des valeurs est important : il correspond à celui des paramètres de la requête SQL
        var_dump($objetMetier);
        $retour = array(
            ':anneescol' => $objetMetier->getAnneeScol(),
            ':idPersonne' => $objetMetier->getIdPersonne(),
            ':numClasse' => $objetMetier->getNumclasse()
        );
        return $retour;
    }
    
    
    public function getAll()
    {
      
        $retour = null;
        // Requête textuelle
        $sql = "SELECT * FROM $this->nomTable F ";
     
        try {
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête PDO
            if ($queryPrepare->execute()) {
                // si la requête réussit :
                // initialiser le tableau d'objets à retourner
                $retour = array();
                // pour chaque enregistrement retourné par la requête
                while ($enregistrement = $queryPrepare->fetch(PDO::FETCH_ASSOC)) {
                    // construir un objet métier correspondant
                    $unObjetMetier = $this->enregistrementVersObjet($enregistrement);
                    // ajouter l'objet au tableau
                    $retour[] = $unObjetMetier;
                }
            }
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }
    
    public function insert($objetMetier) {
      $retour = FALSE;
        try {
            // Requête textuelle paramétrée (paramètres nommés)
            $sql = "INSERT INTO $this->nomTable (";            
            $sql .= "ANNEESCOL,IDPERSONNE,IDPERSONNE)";
            $sql .= "VALUES (";          
            $sql .= ":anneeScol,:idPersonne,:numClasse)";
            var_dump($sql);
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // préparer la  liste des paramètres, avec l'identifiant en dernier
            $parametres = $this->objetVersEnregistrement($objetMetier);
            // exécuter la requête avec les valeurs des paramètres dans un tableau
            $retour = $queryPrepare->execute($parametres);
//            debug_query($sql, $parametres);
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;  
    }

    
    
    public function update($idMetier, $objetMetier) {
        
    }
    
    /**
     * Fonction delete
     */
    function delete($idMetier) {
        $retour = FALSE;
        try {
            // Requête textuelle paramétrée 
            $sql = "DELETE FROM $this->nomTable WHERE IDPERSONNE = :id";
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

