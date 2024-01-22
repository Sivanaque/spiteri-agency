# SpiteriAgency

### **A fake estate agency for an homework, have fun with it :D**

## For SQL
⚠ Mandatory for the website to work. ⚠

You'll find a sql script (in : ```/sql/agence.sql```) to create the database agency as well as the two tables for the users and property advertisments.

If you would the plain script, here it is :

```sql
DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT 'https://images.unsplash.com/photo-1502672023488-70e25813eb80?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGFwcGFydGVtZW50fGVufDB8fDB8fHww',
  `address` varchar(70) DEFAULT NULL,
  `city` varchar(40) NOT NULL,
  `cp` int NOT NULL,
  `squarem` int NOT NULL,
  `rooms` int NOT NULL,
  `price` float NOT NULL,
  `id_u` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id` (`id_u`)
) ENGINE=InnoDB;

INSERT INTO `annonces` (`id`, `img`, `address`, `city`, `cp`, `squarem`, `rooms`, `price`, `id_u`) VALUES
(11, 'https://images.unsplash.com/photo-1630699375895-fe5996d163ee?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '46 rue Bonnet', 'Paris', 75007, 17, 1, 740, 1),
(12, 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '30 cours Jean Jaures', 'Antony', 92002, 72, 5, 1200, 4),
(13, 'https://images.unsplash.com/photo-1484154218962-a197022b5858?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '85 Avenue des Tuileries', 'Juvisy-Sur-Orge', 91260, 49, 3, 1120, 2),
(15, 'https://images.unsplash.com/photo-1489171078254-c3365d6e359f?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '34 rue Pierre De Coubertin', 'Toulouse', 31000, 48, 2, 1025, 3),
(16, 'https://images.unsplash.com/photo-1527772482340-7895c3f2b3f7?q=80&w=2151&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '33 Chemin Challet', 'Lille', 59800, 63, 3, 790, 7),
(17, 'https://plus.unsplash.com/premium_photo-1683769252575-e986af039184?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '76 rue Porte d\'Orange', 'Carpentras', 84200, 120, 8, 1460, 1),
(18, 'https://images.unsplash.com/photo-1617201929478-8eedff7508f9?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '88 rue Lenotre', 'Rennes', 35000, 22, 1, 575, 2),
(19, 'https://images.unsplash.com/photo-1501183638710-841dd1904471?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '25 cours Jean Jaures', 'Bordeaux', 33000, 85, 5, 1230, 8),
(20, 'https://images.unsplash.com/photo-1560184897-67f4a3f9a7fa?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '88 rue du Président Roosevelt', 'Savigny-le-temple', 77176, 53, 4, 730, 4);


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_u` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `amail` varchar(100) NOT NULL,
  `passwd` varchar(90) NOT NULL,
  `level` int DEFAULT '1',
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB;

INSERT INTO `users` (`id_u`, `name`, `amail`, `passwd`, `level`) VALUES
(1, 'Antoine', 'me@antoinespiteri.net', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1),
(2, 'Joséphine', 'malbo23.studio@gmail.com', '9ff2adb3c7909f420659d1227a94db2250a0afdc', 1),
(3, 'Maxime', 'karl.marx@yahoo.fr', '2d5cfaf949cb4e847c14ab3fda9b273922feba76', 1),
(4, 'Violette', 'cgrunge@gmail.com', 'f13f02bf1e4ddcee4fb288c4b8b53a6f9de5299e', 1),
(5, 'Bertrand', 'bertrand.muriel@aol.com', '11867696948599184f9aa8b74f8f34a4a370a08e', 1),
(6, 'Sara', 'montalolo234@gmail.com', '25ec6a59aba347031747d6724cf1a5706d0cddf6', 1),
(7, 'Mathieu', 'champs.mathieu2002@mailo.com', 'e0b723e036f9e80e2c9b5d1766c9eb8ff5f386f7', 1),
(8, 'Anthony', 'antony.gonzalez@ilovem83.com', '890353bbfa9bb8292373dfdbd07e1587dbe8b79a', 1),
(9, 'Valentin', 'thefamousmina@ccool.net', '019b3331f51e15ffa3529154ba9d4a43b3c19822', 1);

ALTER TABLE `annonces`
ADD CONSTRAINT `fk_id` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`);
COMMIT;
```

