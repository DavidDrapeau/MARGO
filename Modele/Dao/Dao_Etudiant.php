<?php

class M_DaoEtudiant implements M_DaoGenerique{
    public static function enregistrementVersObjet($unEnregistrement) {
        
    }
    public static function objetVersEnregistrement($objetMetier) {
        
    }
    
    public static function getAll($pdo) {
        //On construit l'objet etudiant
        $retour = new M_Etudiant();
        return $retour;
    }
    
    public static function getOneById($valeurClePrimaire){
        
    }
}

