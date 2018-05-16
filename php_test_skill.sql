-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: php_test_skill
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `answers_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(2) NOT NULL,
  `correct_answer` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answers_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `questions_description` varchar(255) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Detecta dado do tipo ímpar ?'),(2,'Quais dos seguintes são valores flutuantes válidos?'),(3,'Em PHP string são ?'),(4,'Qual dos seguintes métodos de delimitação é conhecido como string Interpolation'),(5,'Quais tipos de dados são tratados como arrays ?'),(6,'Quais dos seguintes são tipos de dados compostos ?'),(7,'Operador de conversção(casting) introduzido no PHP 6 é?'),(8,'Ao definir o identificador em PHP, você deve se lembrar disso?'),(9,'Identifique o identificador inválido?'),(10,'Qual das seguintes atribuições de variáveis ​​é a atribuição por valor no PHP?'),(11,'Identificar o escopo da variável que não é suportado pelo PHP?'),(12,'A saída do script abaixo seria\n\n$ somerar = 15;\n\nfunção addit () {\n\nGLOBAL $ somevar;\n\n$ somerar ++;\n\necho \"somerar é $ somerar\";\n\n}\naddit ();'),(13,'Escopo variável no qual uma variável não perde seu valor quando a função existe e usa esse valor se a função for chamada novamente é?'),(14,'O operador de associação à esquerda% é usado em PHP para?'),(15,'O operador de ponto associativo esquerdo (.) É usado em PHP para?'),(16,'Qual é a falsa declaração?'),(17,'Qual das seguintes funções requer que o allow-url-fopen esteja habilitado?'),(18,'Qual função inclui o arquivo especificado até mesmo a instrução é avaliada como false em qual bloco a função é colocada?'),(19,'Em caso de falha de qual declaração a execução do script para de exibir mensagem de erro / aviso?'),(20,'Rastrear a função que continua a execução do script, mesmo se a inclusão do arquivo falhar');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-16 20:29:00
