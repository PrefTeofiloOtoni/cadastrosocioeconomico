-- MySQL dump 10.14  Distrib 5.5.52-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: recadastro
-- ------------------------------------------------------
-- Server version	5.5.52-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `familiares`
--

DROP TABLE IF EXISTS `familiares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `familiares` (
  `ID` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `CPF` varchar(14) DEFAULT NULL,
  `Nome` varchar(25) DEFAULT NULL,
  `DataNasc` varchar(12) DEFAULT NULL,
  `Parentesco` varchar(45) DEFAULT NULL,
  `Escolaridade` varchar(45) DEFAULT NULL,
  `Ocupacao` varchar(45) DEFAULT NULL,
  `Remuneracao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2760 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `familiares`
--

LOCK TABLES `familiares` WRITE;
/*!40000 ALTER TABLE `familiares` DISABLE KEYS */;
/*!40000 ALTER TABLE `familiares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `Matricula` int(6) unsigned zerofill NOT NULL,
  `Nome` varchar(80) DEFAULT NULL,
  `Vinculo` enum('Efetivo','Contratado','Cedido') DEFAULT NULL,
  `Situacao` enum('Afastado','Aposentado','Ativo','Pensionista','Inativo') DEFAULT NULL,
  `Sexo` enum('M','F') DEFAULT NULL,
  `Nascto` varchar(12) DEFAULT NULL,
  `Falecto` varchar(12) DEFAULT NULL,
  `Mae` varchar(80) DEFAULT NULL,
  `Pai` varchar(80) DEFAULT NULL,
  `Naturalidade` varchar(45) DEFAULT NULL,
  `UF` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `RG_NUM` varchar(14) DEFAULT NULL,
  `RG_ORG` varchar(10) DEFAULT NULL,
  `RG_UF` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') DEFAULT NULL,
  `Grau_escolar` enum('fund','medio','sup','esp','mes','doc','posdoc') DEFAULT NULL,
  `Status_escolar` enum('completo','incompleto') DEFAULT NULL,
  `Formacao` varchar(45) DEFAULT NULL,
  `Cargo` varchar(45) DEFAULT NULL,
  `Funcao` varchar(45) DEFAULT NULL,
  `Lotacao` varchar(45) DEFAULT NULL,
  `Lotado` varchar(45) DEFAULT NULL,
  `Sup_Imediato` varchar(45) DEFAULT NULL,
  `End_Rua` varchar(45) DEFAULT NULL,
  `End_Num` varchar(20) DEFAULT NULL,
  `End_Comp` varchar(45) DEFAULT NULL,
  `End_Bairro` varchar(45) DEFAULT NULL,
  `End_CEP` varchar(12) DEFAULT NULL,
  `End_Cidade` varchar(45) DEFAULT NULL,
  `End_UF` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') DEFAULT NULL,
  `Fone_Fixo` varchar(45) DEFAULT NULL,
  `Fone_Cel` varchar(45) DEFAULT NULL,
  `Fone_Tipo` enum('proprio','recado') DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `CadUnico` enum('S','N') DEFAULT NULL,
  `NIS` varchar(45) DEFAULT NULL,
  `Cor` enum('branco','pardo','negro','amarelo','indigena') DEFAULT NULL,
  `EstCivil` enum('solteiro','casado','separado','divorciado','viuvo','uniao_estavel') DEFAULT NULL,
  `TimeRes` enum('1','2','3') DEFAULT NULL,
  `Hab_Tipo` enum('casa','apartamento') DEFAULT NULL,
  `Hab_Modo` enum('proprio','alugada','cedida','invadida') DEFAULT NULL,
  `Hab_Quit` enum('sim','nao') DEFAULT NULL,
  `Hab_Valor` varchar(45) DEFAULT NULL,
  `Trans_Forma` enum('coletivo','bicicleta','carro','moto','proprio','outros') DEFAULT NULL,
  `Trans_Tipo` enum('sim','nao') DEFAULT NULL,
  `Ling_Ingles` enum('nenhum','basico','tecnico','fluente') DEFAULT NULL,
  `Ling_Espanhol` enum('nenhum','basico','tecnico','fluente') DEFAULT NULL,
  `Ling_Outros` enum('nenhum','basico','tecnico','fluente') DEFAULT NULL,
  `Ling_extra` varchar(45) DEFAULT NULL,
  `Info_word` tinyint(1) DEFAULT NULL,
  `Info_excel` tinyint(1) DEFAULT NULL,
  `Info_internet` tinyint(1) DEFAULT NULL,
  `Info_Outros` text,
  `Pensao_Paga` tinyint(1) DEFAULT NULL,
  `Pensao_Paga_Val` varchar(45) DEFAULT NULL,
  `Pensao_Recebe` tinyint(1) DEFAULT NULL,
  `Pensao_Recebe_Val` varchar(45) DEFAULT NULL,
  `Renda_Maior` enum('voce','companheiro','pai','mae','outros') DEFAULT NULL,
  `Renda_Mensal_Individual` enum('1','2','3') DEFAULT NULL,
  `Renda_Mensal_Capita` enum('1','2','3') DEFAULT NULL,
  `Deficiente` tinyint(1) DEFAULT NULL,
  `Deficiente_Grau` varchar(45) DEFAULT NULL,
  `Deficiente_Qual` varchar(45) DEFAULT NULL,
  `Idoso` tinyint(1) DEFAULT NULL,
  `Transferencia` tinyint(1) DEFAULT NULL,
  `Transferencia_Qual` varchar(45) NOT NULL,
  `TemEmCasa` text,
  `PlanoDeSaude` tinyint(1) DEFAULT NULL,
  `PlanoDeSaude_Qual` varchar(45) DEFAULT NULL,
  `Observacoes` text,
  `Preenchido` tinyint(1) DEFAULT '0',
  `Quando` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pensionista`
--

DROP TABLE IF EXISTS `pensionista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pensionista` (
  `CPF_Funcionario` varchar(14) DEFAULT NULL,
  `Nome` varchar(80) DEFAULT NULL,
  `Sexo` enum('M','F') DEFAULT NULL,
  `Nascto` varchar(12) DEFAULT NULL,
  `Falecto` varchar(12) DEFAULT NULL,
  `Mae` varchar(80) DEFAULT NULL,
  `Pai` varchar(80) DEFAULT NULL,
  `Naturalidade` varchar(45) DEFAULT NULL,
  `UF` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `RG_NUM` varchar(14) DEFAULT NULL,
  `RG_ORG` varchar(10) DEFAULT NULL,
  `RG_UF` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') DEFAULT NULL,
  `Grau_escolar` enum('fund','medio','sup','esp','mes','doc','posdoc') DEFAULT NULL,
  `Status_escolar` enum('completo','incompleto') DEFAULT NULL,
  `Formacao` varchar(45) DEFAULT NULL,
  `End_Rua` varchar(45) DEFAULT NULL,
  `End_Num` varchar(20) DEFAULT NULL,
  `End_Comp` varchar(45) DEFAULT NULL,
  `End_Bairro` varchar(45) DEFAULT NULL,
  `End_CEP` varchar(12) DEFAULT NULL,
  `End_Cidade` varchar(45) DEFAULT NULL,
  `End_UF` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') DEFAULT NULL,
  `Fone_Fixo` varchar(45) DEFAULT NULL,
  `Fone_Cel` varchar(45) DEFAULT NULL,
  `Fone_Tipo` enum('proprio','recado') DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `CadUnico` enum('S','N') DEFAULT NULL,
  `NIS` varchar(45) DEFAULT NULL,
  `Cor` enum('branco','pardo','negro','amarelo','indigena') DEFAULT NULL,
  `EstCivil` enum('solteiro','casado','separado','divorciado','viuvo','uniao_estavel') DEFAULT NULL,
  `TimeRes` enum('1','2','3') DEFAULT NULL,
  `Hab_Tipo` enum('casa','apartamento') DEFAULT NULL,
  `Hab_Modo` enum('proprio','alugada','cedida','invadida') DEFAULT NULL,
  `Hab_Quit` enum('sim','nao') DEFAULT NULL,
  `Hab_Valor` varchar(45) DEFAULT NULL,
  `Trans_Forma` enum('coletivo','bicicleta','carro','moto','proprio','outros') DEFAULT NULL,
  `Trans_Tipo` enum('sim','nao') DEFAULT NULL,
  `Ling_Ingles` enum('nenhum','basico','tecnico','fluente') DEFAULT NULL,
  `Ling_Espanhol` enum('nenhum','basico','tecnico','fluente') DEFAULT NULL,
  `Ling_Outros` enum('nenhum','basico','tecnico','fluente') DEFAULT NULL,
  `Ling_extra` varchar(45) DEFAULT NULL,
  `Info_word` tinyint(1) DEFAULT NULL,
  `Info_excel` tinyint(1) DEFAULT NULL,
  `Info_internet` tinyint(1) DEFAULT NULL,
  `Info_Outros` text,
  `Pensao_Paga` tinyint(1) DEFAULT NULL,
  `Pensao_Paga_Val` varchar(45) DEFAULT NULL,
  `Pensao_Recebe` tinyint(1) DEFAULT NULL,
  `Pensao_Recebe_Val` varchar(45) DEFAULT NULL,
  `Renda_Maior` enum('voce','companheiro','pai','mae','outros') DEFAULT NULL,
  `Renda_Mensal_Individual` enum('1','2','3') DEFAULT NULL,
  `Renda_Mensal_Capita` enum('1','2','3') DEFAULT NULL,
  `Deficiente` tinyint(1) DEFAULT NULL,
  `Deficiente_Grau` varchar(45) DEFAULT NULL,
  `Deficiente_Qual` varchar(45) DEFAULT NULL,
  `Idoso` tinyint(1) DEFAULT NULL,
  `Transferencia` tinyint(1) DEFAULT NULL,
  `Transferencia_Qual` varchar(45) NOT NULL,
  `TemEmCasa` text,
  `PlanoDeSaude` tinyint(1) DEFAULT NULL,
  `PlanoDeSaude_Qual` varchar(45) DEFAULT NULL,
  `Observacoes` text,
  `Preenchido` tinyint(1) DEFAULT '0',
  `Quando` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pensionista`
--

LOCK TABLES `pensionista` WRITE;
/*!40000 ALTER TABLE `pensionista` DISABLE KEYS */;
/*!40000 ALTER TABLE `pensionista` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-12  8:39:22
