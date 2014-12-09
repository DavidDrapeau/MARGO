<?php

class M_Anneescol {

    
    private $anneeScol; 
    
    
    function __construct($AnneeScol) {
        $this->anneeScol = $AnneeScol;
    }
    
    function getAnneeScol() {
        return $this->anneeScol;
    }

    function setAnneeScol($AnneeScol) {
        $this->anneeScol = $AnneeScol;
    }



}