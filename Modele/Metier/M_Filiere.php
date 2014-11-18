<?php

/**
 * Description of M_Role
 *
 * @author btssio
 */
class M_Filiere {

    private $numFiliere; 
    private $libFiliere;
  

     function __construct($numFiliere, $libFiliere) {
        $this->numFiliere = $numFiliere;
        $this->libFiliere = $libFiliere;
      
    }
   

    public function getNumFiliere() {
        return $this->numFiliere;
    }

    public function getLibFiliere() {
        return $this->libFiliere;
    }

    public function setNumFiliere($numFiliere) {
        $this->numFiliere = $numFiliere;
    }

    public function setLibFiliere($libFiliere) {
        $this->libFiliere = $libFiliere;
    }



    
    
}
