#
Avant de lancer ce projet sur le serveur local,  
veuillez renseigner les identifiants de votre base de données dans le fichier 'connec.php'
Pour créer (database table): 
CREATE TABLE `numberOfHouse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `greenHouse` int DEFAULT NULL,
  `blueHouse` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idnumberOfHouse_UNIQUE` (`id`)
)
Puis lacer le serveur `php -S localhost:8000`
#

