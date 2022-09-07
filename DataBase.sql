DROP DATABASE IF EXISTS MLR1;

CREATE DATABASE IF NOT EXISTS MLR1;
USE MLR1;
# -----------------------------------------------------------------------------
#       TABLE : UTILISATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS UTILISATEUR
 (
   LOGIN DB_TEXT, 32 NOT NULL  ,
   MOT_DE_PASSE DB_TEXT, 32 NOT NULL  ,
   DATE_CRÉATION DB_DATE(8) NOT NULL  ,
   DATE_D_ACTIVATION DB_TEXT, 32 NULL  ,
   ID DB_INTEGER(2) NOT NULL AUTO_INCREMENT 
   , PRIMARY KEY (ID) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------

