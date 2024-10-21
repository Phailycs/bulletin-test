-- Ce fichier sert à initialiser la base de données
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `bulletins` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bulletins` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(1, 'Contrôle de math : Algos népériens', 'Des exercices sur les algos népériens', '2018-05-11 10:12:00'),
(2, 'Contrôle de français : Les invariables', 'Des exercices sur les mots invariables', '2019-06-08 09:22:17');

ALTER TABLE `bulletins`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `bulletins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
