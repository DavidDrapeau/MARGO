<?php

/**
 * Description of M_Role
 *
 * @author btssio
 */
class M_Classe {

    private $numClass; 
    private $idSpec ;
    private $numFiliere;
    private $nomClasse;


     function __construct($numClass, $idSpec, $numFiliere,$nomClasse) {
        $this->numClass = $numClass;
        $this->idSpec = $idSpec ;
        $this->numFiliere = $numFiliere;
        $this->nomClasse = $nomClasse;
    }
    public function getIdSpec() {
        return $this->idSpec;
    }

    public function setIdSpec($idSpec) {
        $this->idSpec = $idSpec;
    }

        public function getNumClass() {
        return $this->numClass;
    }


    public function getNumFIliere() {
        return $this->numFiliere;
    }
    public function getNomClasse()
    {
        return $this->nomClasse ;
    }
    
    public function setNumClass($numClass) {
        $this->numClass = $numClass;
    }


    public function setNumFiliere($numFiliere) {
        $this->numFiliere = $numFiliere;
    }

    public function setNomClasse($nomClasse) {
        $this->nomClasse = $nomClasse;
    }




    
    
}
