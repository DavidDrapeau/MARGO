<?php

 class M_Promotion {
     private $annescol;
     private $idPersonne;
     private $numclasse;
     
     function __construct($annescol, $idPersonne, $numclasse) {
         $this->annescol = $annescol;
         $this->idPersonne = $idPersonne;
         $this->numclasse = $numclasse;
     }
     public function getAnnescol() {
         return $this->annescol;
     }

     public function getIdPersonne() {
         return $this->idPersonne;
     }

     public function getNumclasse() {
         return $this->numclasse;
     }

     public function setAnnescol($annescol) {
         $this->annescol = $annescol;
     }

     public function setIdPersonne($idPersonne) {
         $this->idPersonne = $idPersonne;
     }

     public function setNumclasse($numclasse) {
         $this->numclasse = $numclasse;
     }


     
            
 }

