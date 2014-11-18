<?php

/**
 * Description of M_Enseignement
 *
 * @author btssio
 */
class M_Enseignement {

    private $idEnseignement; 
    private $libEnseignement;


     function __construct($idEnseignement, $libEnseignement) {
        $this->idEnseignement = $idEnseignement;
        $this->libEnseignement = $libEnseignement;
    }
    public function getIdEnseignement() {
        return $this->idEnseignement;
    }

    public function getLibEnseignement() {
        return $this->libEnseignement;
    }

        public function setIdEnseignement($idEnseignement) {
        $this->idEnseignement = $idEnseignement;
    }

    public function setLibEnseignement($libEnseignement) {
        $this->libEnseignement = $libEnseignement;
    }


}
