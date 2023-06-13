CREATE DATABASE IF NOT EXISTS `be-p4-herkansing`;
USE `be-p4-herkansing`;

CREATE TABLE IF NOT EXISTS `lespakket` (
  `Id` INT PRIMARY KEY,
  `paketnaam` VARCHAR(10),
  `aantallessen` INT,
  `rijbewijscategorie` VARCHAR(50),
  `prijs` VARCHAR(250)
 
);

CREATE TABLE IF NOT EXISTS `leerlingperlespakket` (
  `Id` INT PRIMARY KEY,
  `lespakketld` INT,
  `leerlingld` INT,
  `startdadumrijlessen` VARCHAR (250),
  `datumrijbewijsbehaald` VARCHAR (250),
  FOREIGN KEY (`lespakketld`) REFERENCES `lespakket`(`Id`),
  FOREIGN KEY (`leerlingld`) REFERENCES `leerling`(`Id`)
);

CREATE TABLE IF NOT EXISTS `leerling` (
  `Id` INT PRIMARY KEY,
  `Voornaam` VARCHAR(50),
  `Tussenvoegsel` VARCHAR(10),
  `Achternaam` VARCHAR(50),
  `Mobiel` VARCHAR(20)
);

INSERT INTO `lespakket` (Id, paketnaam, aantallessen, rijbewijscategorie, prijs)
VALUES
(1, 'Personenauto Extra', 40, 'B', '2700'),
(2, 'Vrachtwachen Subleim', 60, 'C', '5400'),
(3, 'Bus Extraordinaire', 80, 'D', '7300'),
(4, 'Bromfiets Deluxw', 10, 'AM', '230');

INSERT INTO `leerlingperlespakket` (Id, lespakketld, leerlingld, startdadumrijlessen, datumrijbewijsbehaald)

VALUES
(1, 1, 5, '2019-01-01', '2019-01-01'),
(2, 4, 1, '2019-01-01', '2019-01-01'),
(3, 1, 1, '2019-01-01', '2019-01-01'),
(4, 3, 4, '2019-01-01', '2019-01-01'),
(5, 1, 2, '2019-01-01', '2019-01-01'),
(6, 2, 3, '2019-01-01', '2019-01-01');

INSERT INTO `leerling` (Id, Voornaam, Tussenvoegsel, Achternaam, Mobiel)
VALUES
(1, 'Bas', 'De', 'Bakker', '06-28493823'),
(2, 'Trence', '', 'Draaijer', '06-24383299'),
(3, 'Samuel', '', 'Werchter', '06-48293846'),
(4, 'Sharida', '', 'Tetehuka', '06-34291219'),
(5, 'Fatima', '', 'Yilmaz', '06-48293846');