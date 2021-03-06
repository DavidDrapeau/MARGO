<?php

class M_DaoClasse extends M_DaoGenerique
{
    
       function __construct() {
        $this->nomTable = "CLASSE";
        $this->nomClefPrimaire = "NUMCLASSE";
    }

    public function enregistrementVersObjet($enreg) {
      
          $retour = new M_Classe($enreg['NUMCLASSE'], $enreg['IDSPECIALITE'], $enreg['NUMFILIERE'],  $enreg['NOMCLASSE']);
     
        return $retour;
        
    }
      public function objetVersEnregistrement($objetMetier) {

              $retour = array(
            ':numClass' => $objetMetier->getNumClass(),
            ':idSpec'   =>$objetMetier->getIdSpec(),
            ':numFiliere' => $objetMetier->getNumFiliere(),
            ':nomClass' => $objetMetier->getNomClasse()
        );
              
               return $retour;
    }

    public function insert($objetMetier) {
  
        $retour = FALSE;
        try {
            // Requête textuelle paramétrée (paramètres nommés)
            $sql = "INSERT INTO $this->nomTable (";
            $sql .= " NUMCLASSE, IDSPECIALITE, NUMFILIERE, NOMCLASSE)";
            $sql .= " VALUES (";
            $sql .= ":numClass, :idSpec, :numFiliere, :nomClass)";
          
          
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
    public function verif($row) 
    {
        $message = null ;
        $numClass = $row['numClasse'] ;
        $nomClass = $row['nomClasse'] ;
        
 
        $retour = false ;
        try {
            $sql =" SELECT * FROM $this->nomTable WHERE NUMCLASSE = '".$numClass."'" ;
            $queryPrepare = $this->pdo->prepare($sql);
            $retour = $queryPrepare->execute() ;
            $result = $queryPrepare->fetch(PDO::FETCH_ASSOC);
            if($result != false)
            {
                $message ="Erreur, le numéro de classe existe déjà !<br>" ;
            }
            
            $sql ="SELECT * FROM $this->nomTable WHERE NOMCLASSE = '".$nomClass."'" ;
             $queryPrepare = $this->pdo->prepare($sql);
            $retour = $queryPrepare->execute() ;
            $result = $queryPrepare->fetch(PDO::FETCH_ASSOC);
             if($result != false)
            {
                $message .="Erreur, le nom de classe existe déjà !" ;
            }
            
        } catch (Exception $ex) {

        }
        return $message ;
    }

 
    public function update($idMetier, $objetMetier) {
         $retour = FALSE;
        // Requête textuelle
     
          try {
        $sql = "UPDATE $this->nomTable "
                ."SET IDSPECIALITE = :idSpec, "
                ."NUMFILIERE  = :numFiliere, "
                ."NOMCLASSE = :nomClass "
                ."WHERE NUMCLASSE=:numClass";
        
 
       
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
    function getAllById($id)
    {
          $retour = null;
        // Requête textuelle
        $sql = "SELECT * FROM $this->nomTable P INNER JOIN FILIERE F ON P.NUMFILIERE=F.NUMFILIERE WHERE NUMCLASSE ='".$id."'";
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
    
    public function delelte($id)
    {
          $retour = null;
        // Requête textuelle
        $sql = "DELETE FROM $this->nomTable P WHERE condition NUMCLASSE ='".$id."' ";
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
