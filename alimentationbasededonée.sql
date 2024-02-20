

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




/* Création de la table mebre*/
/* Création setion de la table membre*/
-- Supprime la table 'membre' si elle existe déjà
DROP TABLE IF EXISTS `membre`;

/* Crée une nouvelle table 'membre' si elle n'existe pas encore */
CREATE TABLE IF NOT EXISTS `membre` (
/* Identifiant unique de chaque membre */
  `id` int NOT NULL AUTO_INCREMENT,
  /* Champ obligatoire pseudo */
  `pseudo` text NOT NULL,
  /* Champ obligatoire mot de passe*/
  `password` text NOT NULL,
  /* création de 'id' comme clé primaire  */
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



/* Compte admin et employé*/
/* Insertion de données dans la table 'membre' */
INSERT INTO `membre` (`id`, `pseudo`, `password`) VALUES
  /* enregistrement du compte admin */
  (11, 'admin@gmail.com', '$2y$10$83y4I2GY13VeQ5be/mmIbO53pv4L779JTDuz/enZii/Uig9mECY46'),
  /* enregistrement compte utilisateur*/
  (13, 'n@gmail.com', '$2y$10$IiGSFrfxYJXFN7xrWpCXhuU6JHA6IRhqOd60NAERvyiJ66JRZ5/Eq');





/* Structure de la table `servicetable` */

/* Création de la table service pour l'ajout des services avec 2 colones */
DROP TABLE IF EXISTS `servicetable`;
/* Vérification de si la table servicetable existe déja*/
CREATE TABLE IF NOT EXISTS `servicetable` (
  `ID` int NOT NULL,
  `ServiceName` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



/* Insértion des valeurs rréparation, vidange, carroserie dans ta table service table*/
INSERT INTO `servicetable` (`ID`, `ServiceName`) VALUES
(0, 'Réparation véhicule'),
(0, 'Vidange'),
(0, 'Carroserie');
COMMIT;


