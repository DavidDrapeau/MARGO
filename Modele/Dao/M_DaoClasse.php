<?php

class M_DaoClasse extends M_DaoGenerique
{
    
       function __construct() {
        $this->nomTable = "CLASSE";
        $this->nomClefPrimaire = "NUMCLASSE";
    }

    public function enregistrementVersObjet($enreg) {
          $retour = new M_Classe($enreg['NUMCLASSE'], $enreg['NUMFILIERE'],  $enreg['NOMCLASSE']);
         
        return $retour;
    }

    public function insert($objetMetier) {
        $retour = FALSE;
        try {
            // Requête textuelle paramétrée (paramètres nommés)
            $sql = "INSERT INTO $this->nomTable (";
            $sql .= " NUMCLASSE, IDSPECIALITE, NUMFILIERE, NOMCLASSE)";
            $sql .= " VALUES (";
            $sql .= ":numClass, null, :numFiliere, :nomClasse)";
          
          
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            var_dump($queryPrepare) ;
            // préparer la  liste des paramètres, avec l'identifiant en dernier
            $parametres = $this->objetVersEnregistrement($objetMetier);
            var_dump($parametres);
           
            // exécuter la requête avec les valeurs des paramètres dans un tableau
            var_dump($retour = $queryPrepare->execute($parametres));
         
          
//            debug_query($sql, $parametres);
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
    
        
        return $retour;
        
    }

    public function objetVersEnregistrement($objetMetier) {
             $retour = array(
            ':numClass' => $objetMetier->getNumClass(),
            ':numFiliere' => $objetMetier->getNumFIliere(),
            ':nomClass' => $objetMetier->getNomClasse()
        );
        return $retour;
    }

    public function update($idMetier, $objetMetier) {
        
    }
    
    public function getAll()
    {
      
        $retour = null;
        // Requête textuelle
        $sql = "SELECT * FROM $this->nomTable P ";
     
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

}
