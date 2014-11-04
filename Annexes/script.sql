DROP DATABASE IF EXISTS MARGO;

CREATE DATABASE IF NOT EXISTS MARGO;
USE MARGO;
# -----------------------------------------------------------------------------
#       TABLE : PERSONNE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERSONNE
 (
   IDPERS SMALLINT NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENON CHAR(32) NULL  ,
   SITUATION CHAR(32) NULL  ,
   ADR CHAR(32) NULL  
   , PRIMARY KEY (IDPERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ETUDIANT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ETUDIANT
 (
   IDPERS SMALLINT NOT NULL  ,
   CODECLASSE SMALLINT NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENON CHAR(32) NULL  ,
   SITUATION CHAR(32) NULL  ,
   ADR CHAR(32) NULL  
   , PRIMARY KEY (IDPERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ETUDIANT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ETUDIANT_CLASSE
     ON ETUDIANT (CODECLASSE ASC);

# -----------------------------------------------------------------------------
#       TABLE : FILIERES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FILIERES
 (
   CODEFILIERE CHAR(32) NOT NULL  ,
   IDPERS SMALLINT NOT NULL  ,
   LIBFILIERE CHAR(32) NULL  
   , PRIMARY KEY (CODEFILIERE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FILIERES
# -----------------------------------------------------------------------------


CREATE UNIQUE INDEX I_FK_FILIERES_ENSEIGNANT
     ON FILIERES (IDPERS ASC);

# -----------------------------------------------------------------------------
#       TABLE : ENFANT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENFANT
 (
   IDENFANT SMALLINT NOT NULL  ,
   IDPERS SMALLINT NOT NULL  ,
   PRENOM CHAR(32) NULL  ,
   DATENAISS DATE NULL  
   , PRIMARY KEY (IDENFANT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ENFANT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ENFANT_PERSONNEL
     ON ENFANT (IDPERS ASC);

# -----------------------------------------------------------------------------
#       TABLE : PERSONNEL
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERSONNEL
 (
   IDPERS SMALLINT NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENON CHAR(32) NULL  ,
   SITUATION CHAR(32) NULL  ,
   ADR CHAR(32) NULL  
   , PRIMARY KEY (IDPERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : INTERVENANT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INTERVENANT
 (
   IDPERS SMALLINT NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENON CHAR(32) NULL  ,
   SITUATION CHAR(32) NULL  ,
   ADR CHAR(32) NULL  
   , PRIMARY KEY (IDPERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TECHNICIEN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TECHNICIEN
 (
   IDPERS SMALLINT NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENON CHAR(32) NULL  ,
   SITUATION CHAR(32) NULL  ,
   ADR CHAR(32) NULL  
   , PRIMARY KEY (IDPERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CLASSE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLASSE
 (
   CODECLASSE SMALLINT NOT NULL  ,
   CODEFILIERE CHAR(32) NOT NULL  ,
   LIBCLASSE CHAR(32) NULL  
   , PRIMARY KEY (CODECLASSE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CLASSE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CLASSE_FILIERES
     ON CLASSE (CODEFILIERE ASC);

# -----------------------------------------------------------------------------
#       TABLE : ADMINISTRATIF
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ADMINISTRATIF
 (
   IDPERS SMALLINT NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENON CHAR(32) NULL  ,
   SITUATION CHAR(32) NULL  ,
   ADR CHAR(32) NULL  
   , PRIMARY KEY (IDPERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MATIERE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MATIERE
 (
   CODEMAT SMALLINT NOT NULL  ,
   LIBMAT CHAR(32) NULL  
   , PRIMARY KEY (CODEMAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ENSEIGNANT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENSEIGNANT
 (
   IDPERS SMALLINT NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENON CHAR(32) NULL  ,
   SITUATION CHAR(32) NULL  ,
   ADR CHAR(32) NULL  
   , PRIMARY KEY (IDPERS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ENSEIGNENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENSEIGNENT
 (
   IDPERS SMALLINT NOT NULL  ,
   CODEMAT SMALLINT NOT NULL  ,
   CODECLASSE SMALLINT NOT NULL  
   , PRIMARY KEY (IDPERS,CODEMAT,CODECLASSE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ENSEIGNENT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ENSEIGNENT_INTERVENANT
     ON ENSEIGNENT (IDPERS ASC);

CREATE  INDEX I_FK_ENSEIGNENT_MATIERE
     ON ENSEIGNENT (CODEMAT ASC);

CREATE  INDEX I_FK_ENSEIGNENT_CLASSE
     ON ENSEIGNENT (CODECLASSE ASC);

# -----------------------------------------------------------------------------
#       TABLE : ENSEIGNEMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ENSEIGNEMENT
 (
   CODECLASSE SMALLINT NOT NULL  ,
   CODEMAT SMALLINT NOT NULL  ,
   VOLUMEHORAIREANNUEL DECIMAL(10,2) NULL  ,
   COEFFICIENT DECIMAL(10,2) NULL  
   , PRIMARY KEY (CODECLASSE,CODEMAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE ENSEIGNEMENT
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_ENSEIGNEMENT_CLASSE
     ON ENSEIGNEMENT (CODECLASSE ASC);

CREATE  INDEX I_FK_ENSEIGNEMENT_MATIERE
     ON ENSEIGNEMENT (CODEMAT ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE ETUDIANT 
  ADD FOREIGN KEY FK_ETUDIANT_CLASSE (CODECLASSE)
      REFERENCES CLASSE (CODECLASSE) ;


ALTER TABLE ETUDIANT 
  ADD FOREIGN KEY FK_ETUDIANT_PERSONNE (IDPERS)
      REFERENCES PERSONNE (IDPERS) ;


ALTER TABLE FILIERES 
  ADD FOREIGN KEY FK_FILIERES_ENSEIGNANT (IDPERS)
      REFERENCES ENSEIGNANT (IDPERS) ;


ALTER TABLE ENFANT 
  ADD FOREIGN KEY FK_ENFANT_PERSONNEL (IDPERS)
      REFERENCES PERSONNEL (IDPERS) ;


ALTER TABLE PERSONNEL 
  ADD FOREIGN KEY FK_PERSONNEL_PERSONNE (IDPERS)
      REFERENCES PERSONNE (IDPERS) ;


ALTER TABLE INTERVENANT 
  ADD FOREIGN KEY FK_INTERVENANT_PERSONNEL (IDPERS)
      REFERENCES PERSONNEL (IDPERS) ;


ALTER TABLE TECHNICIEN 
  ADD FOREIGN KEY FK_TECHNICIEN_INTERVENANT (IDPERS)
      REFERENCES INTERVENANT (IDPERS) ;


ALTER TABLE CLASSE 
  ADD FOREIGN KEY FK_CLASSE_FILIERES (CODEFILIERE)
      REFERENCES FILIERES (CODEFILIERE) ;


ALTER TABLE ADMINISTRATIF 
  ADD FOREIGN KEY FK_ADMINISTRATIF_PERSONNEL (IDPERS)
      REFERENCES PERSONNEL (IDPERS) ;


ALTER TABLE ENSEIGNANT 
  ADD FOREIGN KEY FK_ENSEIGNANT_INTERVENANT (IDPERS)
      REFERENCES INTERVENANT (IDPERS) ;


ALTER TABLE ENSEIGNENT 
  ADD FOREIGN KEY FK_ENSEIGNENT_INTERVENANT (IDPERS)
      REFERENCES INTERVENANT (IDPERS) ;


ALTER TABLE ENSEIGNENT 
  ADD FOREIGN KEY FK_ENSEIGNENT_MATIERE (CODEMAT)
      REFERENCES MATIERE (CODEMAT) ;


ALTER TABLE ENSEIGNENT 
  ADD FOREIGN KEY FK_ENSEIGNENT_CLASSE (CODECLASSE)
      REFERENCES CLASSE (CODECLASSE) ;


ALTER TABLE ENSEIGNEMENT 
  ADD FOREIGN KEY FK_ENSEIGNEMENT_CLASSE (CODECLASSE)
      REFERENCES CLASSE (CODECLASSE) ;


ALTER TABLE ENSEIGNEMENT 
  ADD FOREIGN KEY FK_ENSEIGNEMENT_MATIERE (CODEMAT)
      REFERENCES MATIERE (CODEMAT) ;


