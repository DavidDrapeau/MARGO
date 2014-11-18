<?php

class M_DaonsEnseignement extends M_DaoGenerique
{
    
       function __construct() {
        $this->nomTable = "ENSEIGNEMENT";
        $this->nomClefPrimaire = "ID_ENSEIGNEMENT";
    }

    public function enregistrementVersObjet($enreg) {
          $retour = new M_Enseignement($enreg['ID_ENSEIGNEMENT'], $enreg['LIB_ENSEIGNEMENT']);
        return $retour;
    }

    public function insert($objetMetier) {
        
    }

    public function objetVersEnregistrement($objetMetier) {
             $retour = array(
            ':idEnseignement' => $objetMetier->getIdEnseignement(),
            ':libEnseignement' => $objetMetier->getLibEnseignement(),
        );
        return $retour;
    }

    public function update($idMetier, $objetMetier) {
        
    }
    
    public function getAll()
    {
      
        $retour = null;
        // Requête textuelle
        $sql = "SELECT * FROM $this->nomTable E ";
     
        try {
            // préparer la requête PDO
            var_dump($sql) ;
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

