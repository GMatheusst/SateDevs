  -- --------------------------------------------------------
  -- Servidor:                     localhost
  -- Versão do servidor:           8.0.37 - MySQL Community Server - GPL
  -- OS do Servidor:               Win64
  -- HeidiSQL Versão:              12.8.0.6908
  -- --------------------------------------------------------

  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET NAMES utf8 */;
  /*!50503 SET NAMES utf8mb4 */;
  /*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
  /*!40103 SET TIME_ZONE='+00:00' */;
  /*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
  /*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
  /*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


  -- Copiando estrutura do banco de dados para dbcontrole
  CREATE DATABASE IF NOT EXISTS `dbcontrole` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
  USE `dbcontrole`;

  -- Copiando estrutura para tabela dbcontrole.tbcategoria
  CREATE TABLE IF NOT EXISTS `tbcategoria` (
    `idCategoria` int NOT NULL AUTO_INCREMENT,
    `nomeCategoria` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `descCategoria` char(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `situacaoCategoria` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'ATIVO',
    PRIMARY KEY (`idCategoria`)
  ) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

  -- Exportação de dados foi desmarcado.

  -- Copiando estrutura para tabela dbcontrole.tbevento
  CREATE TABLE IF NOT EXISTS `tbevento` (
    `idEvento` int NOT NULL AUTO_INCREMENT,
    `nomeEvento` char(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `localEvento` char(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `dataInicioEvento` date NOT NULL DEFAULT (0),
    `dataFimEvento` date NOT NULL,
    `horaInicioEvento` time NOT NULL,
    `horaFimEvento` time NOT NULL DEFAULT '00:00:00',
    `situacaoImagem` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'ATIVO',
    PRIMARY KEY (`idEvento`)
  ) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

  -- Exportação de dados foi desmarcado.

  -- Copiando estrutura para tabela dbcontrole.tbimagem
  CREATE TABLE IF NOT EXISTS `tbimagem` (
    `idImagem` int NOT NULL AUTO_INCREMENT,
    `nomeImagem` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `pastaImagem` char(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `situacaoImagem` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'ATIVO',
    PRIMARY KEY (`idImagem`)
  ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

  -- Exportação de dados foi desmarcado.

  -- Copiando estrutura para tabela dbcontrole.tbnewsletter
  CREATE TABLE IF NOT EXISTS `tbnewsletter` (
    `idNewsLetter` int NOT NULL AUTO_INCREMENT,
    `emailNewsLetter` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0',
    `situacaoNewsLetter` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'ATIVO',
    PRIMARY KEY (`idNewsLetter`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela para cadastrar news letter';

  -- Exportação de dados foi desmarcado.

  -- Copiando estrutura para tabela dbcontrole.tbontato
  CREATE TABLE IF NOT EXISTS `tbontato` (
    `idContato` int NOT NULL AUTO_INCREMENT,
    `nomeContato` char(50) DEFAULT NULL,
    `emailContato` char(50) DEFAULT NULL,
    `cidadeContato` char(30) DEFAULT NULL,
    `estadoContato` char(2) DEFAULT NULL,
    `assuntoContato` char(50) DEFAULT NULL,
    `mensagemContato` varchar(500) DEFAULT NULL,
    `situacaoContato` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'ATIVO',
    PRIMARY KEY (`idContato`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela para salvar mensagens dos usuários.';

  -- Exportação de dados foi desmarcado.

  -- Copiando estrutura para tabela dbcontrole.tbproduto
  CREATE TABLE IF NOT EXISTS `tbproduto` (
    `idProduto` int NOT NULL AUTO_INCREMENT,
    `idImagem` int DEFAULT '0',
    `nomeProduto` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `sessaoProduto` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `descProduto` char(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `quantProduto` int DEFAULT '0',
    `valorProduto` float DEFAULT '0',
    `situacaoProduto` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'ATIVO',
    `idCategoria` int DEFAULT '0',
    `idSubCategoria` int DEFAULT '0',
    `destaqueProduto` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'NÃO',
    PRIMARY KEY (`idProduto`)
  ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

  -- Exportação de dados foi desmarcado.

  -- Copiando estrutura para tabela dbcontrole.tbsubcategoria
  CREATE TABLE IF NOT EXISTS `tbsubcategoria` (
    `idSubCategoria` int NOT NULL AUTO_INCREMENT,
    `nomeSubCategoria` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `descSubCategoria` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0',
    `situacaoSubCategoria` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'ATIVO',
    PRIMARY KEY (`idSubCategoria`)
  ) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

  -- Exportação de dados foi desmarcado.

  -- Copiando estrutura para tabela dbcontrole.tbusuario
  CREATE TABLE IF NOT EXISTS `tbusuario` (
    `idUsuario` int NOT NULL AUTO_INCREMENT,
    `nomeUsuario` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `senhaUsuario` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
      `ProfissaoUsuario` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `emailUsuario` char(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `fotoUsuario` char(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `pastaFotoUsuario` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
    `situacaoUsuario` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'ATIVO',
    PRIMARY KEY (`idUsuario`)
  ) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

  -- Exportação de dados foi desmarcado.

  /*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
  /*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
  /*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;