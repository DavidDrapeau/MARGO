<?php

class M_Etudiant{
    private $nom;
    private $prenom;
    private $codeClasse;
    private $idPersonne;
    private $situation;
    private $adresse;
    
    function __construct($nom, $prenom, $codeClasse, $idPersonne, $situation, $adresse) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->codeClasse = $codeClasse;
        $this->idPersonne = $idPersonne;
        $this->situation = $situation;
        $this->adresse = $adresse;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getCodeClasse() {
        return $this->codeClasse;
    }

    public function getIdPersonne() {
        return $this->idPersonne;
    }

    public function getSituation() {
        return $this->situation;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setCodeClasse($codeClasse) {
        $this->codeClasse = $codeClasse;
    }

    public function setIdPersonne($idPersonne) {
        $this->idPersonne = $idPersonne;
    }

    public function setSituation($situation) {
        $this->situation = $situation;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }


    
}

