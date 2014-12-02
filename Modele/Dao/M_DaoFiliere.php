<?php

class M_DaoFiliere extends M_DaoGenerique
{
    
       function __construct() {
        $this->nomTable = "FILIERE";
        $this->nomClefPrimaire = "NUMFILIERE";
    }

    public function enregistrementVersObjet($enreg) {
          $retour = new M_Filiere($enreg['NUMFILIERE'], $enreg['LIBELLEFILIERE']);
        return $retour;
    }

    public function insert($objetMetier) {
        $retour = FALSE;
        try {
            // Requête textuelle paramétrée (paramètres nommés)
            $sql = "INSERT INTO $this->nomTable (";            
            $sql .= "NUMFILIERE,LIBELLEFILIERE)";
            $sql .= "VALUES (";          
            $sql .= ":numFiliere,:libFiliere)";
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

    public function objetVersEnregistrement($objetMetier) {
             $retour = array(
            ':numFiliere' => $objetMetier->getNumFiliere(),
            ':libFiliere' => $objetMetier->getLibFIliere(),
        );
        return $retour;
    }

    public function update($idMetier, $objetMetier) {
         $retour = FALSE;
        try {
            // Requête textuelle paramétrée (paramètres nommés)
            $sql = "UPDATE $this->nomTable SET ";           
            $sql .= "LIBELLEFILIERE  = :libFiliere ";
            $sql .= "WHERE NUMFILIERE = :numFiliere"; 
            //var_dump($sql);
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
           //var_dump($queryPrepare);
            
            // préparer la  liste des paramètres, avec l'identifiant en dernier
            $parametres = $this->objetVersEnregistrement($objetMetier);
           //var_dump($parametres);
           //die();
            // préparer la  liste des paramètres la valeur de l'identifiant
            $retour = $queryPrepare->execute($parametres);
         // debug_query($sql, $parametres);
          //die();
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
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
    
    public function getById($id)
    {
        
        $retour = null;
        // Requête textuelle
        $sql = "SELECT LIBELLEFILIERE FROM $this->nomTable F WHERE NUMFILIERE=$id";
     
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


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

