<?php

class M_DaoEnseignement extends M_DaoGenerique{
    
       function __construct() {
        $this->nomTable = "ENSEIGNEMENT";
        $this->nomClefPrimaire = "ID_ENSEIGNEMENT";
    }

    public function enregistrementVersObjet($enreg) {
          $retour = new M_Enseignement($enreg['ID_ENSEIGNEMENT'], $enreg['LIB_ENSEIGNEMENT']);
        return $retour;
    }

    public function objetVersEnregistrement($objetMetier) {
        
             $retour = array(
            ':idEnseignement' => $objetMetier->getIdEnseignement(),
            ':libEnseignement' => $objetMetier->getLibEnseignement(),
        );
        return $retour;
    }
    
    public function getAll()
    {
      
        $retour = null;
        // Requête textuelle
        $sql = "SELECT * FROM $this->nomTable ";
     
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
            $sql .= " ID_ENSEIGNEMENT, LIB_ENSEIGNEMENT)";
            $sql .= " VALUES (";
            $sql .= ":idEnseignement, :libEnseignement)";
          
          
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
        
            // préparer la  liste des paramètres, avec l'identifiant en dernier
            $parametres = $this->objetVersEnregistrement($objetMetier);
           
    
            // exécuter la requête avec les valeurs des paramètres dans un tableau
            
            $retour = $queryPrepare->execute($parametres);
        
         
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
    

        return $retour;
        
    }

    public function update($idMetier, $objetMetier) {
         $retour = FALSE;
        // Requête textuelle
     
          try {
        $sql = "UPDATE $this->nomTable "
                ."SET ID_ENSEIGNEMENT = :idEnseignement, "
                ."LIB_ENSEIGNEMENT  = :libEnseignement "
                . "WHERE ID_ENSEIGNEMENT =:idEnseignement";
        
 

            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // préparer la  liste des paramètres, avec l'identifiant en dernier
            $parametres = $this->objetVersEnregistrement($objetMetier);
      
           
          
       
    
            // exécuter la requête avec les valeurs des paramètres dans un tableau
            
            $retour = $queryPrepare->execute($parametres);

      } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
    
    

        return $retour;
        
    }
    
    function getAllById($id)
    {
          $retour = null;
        // Requête textuelle
        $sql = "SELECT * FROM $this->nomTable WHERE ID_ENSEIGNEMENT ='".$id."'";
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
    
    public function delete($id)
    {
          $retour = null;
        // Requête textuelle
        $sql = "DELETE FROM $this->nomTable E WHERE condition ID_ENSEIGNEMENT ='".$id."' ";
        try {
            // préparer la requête PDO
          
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête PDO
            if ($queryPrepare->execute()) {
                // si la requête réussit :
                // initialiser le tableau d'objets à retourner
                $retour = "La classe à bien été supprimée ! " ;
                }
                else {
                    $retour = "Erreur lors de la suppression de la classe " ;
            }
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }

    }

