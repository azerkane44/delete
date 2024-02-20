# ECF
Voici le github contenant tous mes dossiers de mon projet ECF

# Somaire
1. But du projet.
2. Les fonctionnalités désirées.
3. Les technologies utilisés.
4. Etape de création de l'administrateur dans le back-office
5. Comment executer le projet en locale


#  1: But du projet

Ce projet à pour but de créer  de créer une application web vitrine pour le Garage V. Parrot,
en mettant en avant la qualité des services délivrés par cette récente entreprise tel que la réparation et la vente de véhicule.

Cette apllication web devra etre fourni avec  l'intégration, le développement , le déploiement , un wireframe, des diagrames et une carte graphique contenant la palette de couleur et la police d'ecriture.

# 2: Les fonctionnalités desirées

#  US1. Se connecter
1. Un formulaire de connexion pour admin et employés avec e-mail et mot de passe securisé.
2. La création d'un compte admin pour le directeur Vincent.parrot.
3. Des comptes employés créer par l'admin et seulemnt par lui.

 # US2. Présenter les services
1. Afficher les services de maniére claire pour les utilisateurs et l'admin avec posibiliter pour l'administrateur de les modifiers depuis son espace admin.
2. Posibiliter pour l'administrateur de mofifer ses services.

 # US3. Définir les horaires d’ouverture
1. Les horaires d'ouverture et fermeture doivent etre présent dans le pied de chaque page.
2. L'administrateur doit pouvoir modifier ses horaires depuis son espace dedié.


#  US3. Exposer les voitures d'occasion
1. Exposer les voitures d'occasion avec des photos et des description.
2. Posibiliter pour les employés d'en ajouter depuis leur espace membre.

#  US4. Filtrer la liste des véhicules d’occasion
1. Ajouter des filtres pour les voitures d'occasion sans avoir à recharger la page

 #  US4. Permettre de contacter l'atelier
1. Les visiteurs doivent pouvoir contacter l'atelier
2. Via un formulaire en ligne ou par téléphone
3. les informations de contact doivent etre visible en bas de chaque voiture.

 #  US5. Recueillir les témoignages des clients
1. Les visiteurs doivent pouvoir laisser un témoignage avec nom, un commentaire et une note.
2. Les avis seront moderer par un emplyé du garage.
3. Une section spécifique doit etre attribuée pour les témoignage client.

# 3: Technologies Utilisées
Front-end:
    HTML 5
    CSS 3

Back-end:
    My sql
    PHP 8.2 sous PDO
    PHP mailer

# 4: Etape de création de l'administrateur dans le back-office

1. Cliquer sur le bouton connexion
   L'administrateur devra se connecter via le bouton connexion présent dans le header.

2.Remplissage formulaire de connexion
L'administrateur devra entrée son e-mail deja créer et se connecter grace à cette email admin@gmail.com et se mot de passe admin1234.

3. Redirection vers l'espace d'administration et administration via le back-office.
Vincent Parrot se rediriger vers l'espace d'administration grace à ce compte admin d'ou ils pourra créer et bannir des membres, ajouter des services , et voir les memebres inscrit tous cela grace à différent bouton doté d'une description pour gérer les différentes fonctionnalités citée.

# 5. Comment executer le projet en locale


## Prérequis
- Wamp
- Phpmailer
- Php my admin
- Un éditeur de code

## Installation
1. Cloner le dépôt : `git clone https://github.com/nom-utilisateur/nom-projet.git`
2. créer un dossier dans C:\wamp64\www  "projet connexion " contenant un dossier images avec toute les images, et un dossier Phpmailer avec les documents du dossier tous 2 présents sur github.


 
## Base de données
1. Créer une base de donée "espaceadmin" avec une table "membre" conteant c'est information CREATE TABLE IF NOT EXISTS `membre` (
/* Identifiant unique de chaque membre */
  `id` int NOT NULL AUTO_INCREMENT,
  /* Champ obligatoire pseudo */
  `pseudo` text NOT NULL,
  /* Champ obligatoire mot de passe*/
  `password` text NOT NULL,
2. Création de la 2ème table "servicetable" contenant ces informations CREATE TABLE IF NOT EXISTS `servicetable` (
  `ID` int NOT NULL,
  `ServiceName` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL


## Exécution
1. Lancer l'application wamp avec pour nom d'utilisateur root.
2. Accéder à l'application dans votre navigateur à l'adresse http://localhost/projetconnexion/doc.php .


## Liste des fonctionallités manquantes 
- Posibiliter d'ajout de voiture pour les membres à partir de leur espace membre
- Posibilier pour l'administrateur de modifier les heures du garage
- le filtre
- le receuil de témoigage client

# Erreur
N'ayant pas compris que Phpmyadmin etait en sgbr je l'ai utiliser, mais le code sql est présent dans mon github.
  
    



