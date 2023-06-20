-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para trabalho
CREATE DATABASE IF NOT EXISTS `trabalho` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `trabalho`;

-- Copiando estrutura para tabela trabalho.crud_aluno
CREATE TABLE IF NOT EXISTS `crud_aluno` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `RA` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `polo` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela trabalho.crud_aluno: ~3 rows (aproximadamente)
INSERT INTO `crud_aluno` (`codigo`, `RA`, `nome`, `idade`, `sexo`, `polo`) VALUES
	(3, 20220019, 'Camila Betânia', 17, 'F', 'IFSULDEMINAS'),
	(4, 20220018, 'Ana Clara', 18, 'F', 'IFSULDEMINAS'),
	(5, 2020190041, 'Murilo', 18, 'M', 'IFSULDEMINAS');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
