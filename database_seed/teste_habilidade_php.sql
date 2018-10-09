-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--

-- ------------------------------------------------------


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
-- Table structure for table `answers_1`
--

DROP TABLE IF EXISTS `answers_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers_1` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(2) NOT NULL,
  `correct_answer` tinyint(4) NOT NULL DEFAULT '0',
  `answer_description` varchar(255) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers_1`
--

LOCK TABLES `answers_1` WRITE;
/*!40000 ALTER TABLE `answers_1` DISABLE KEYS */;
INSERT INTO `answers_1` VALUES (1,1,0,'(A) floats '),(2,1,1,'(B) integer '),(3,1,0,'(C) doubles '),(4,1,0,'(D) Real number'),(5,2,0,'(A) 4.5678 '),(6,2,0,'(B) 4.0 '),(7,2,0,'(C) 7e4 '),(8,2,1,'(D) Todas acima'),(9,3,0,'(A) Delimitado por aspas simples'),(10,3,0,'(B) Delimitado por aspas duplas'),(11,3,0,'(C) Delimitado por <<< identificador'),(12,3,1,'(D) Todas acima'),(13,4,0,'(A) Delimitado por aspas simples'),(14,4,0,'(B) Delimitado por aspas duplas'),(15,4,1,'(C) Delimitado por <<< identificador'),(16,4,0,'(D) Todas acima'),(17,5,0,'(A) Integer '),(18,5,0,'(B) Float '),(19,5,1,'(C) String '),(20,5,0,'(D) Booleans '),(21,6,0,'(A) Array '),(22,6,0,'(B) Objetos'),(23,6,1,'(C) Ambas'),(24,6,0,'(D) Nenhum '),(25,7,0,'(A) (array) '),(26,7,1,'(B) (int64) '),(27,7,0,'(C) (real) or (double) or (float) '),(28,7,0,'(D) (objeto) '),(29,8,0,'(A) Identificador diferencia maiúsculas de minúsculas. Então, $result é diferente de $ result'),(30,8,0,'(B) Identificadores podem ter qualquer comprimento'),(31,8,1,'(C) Todas acima'),(32,8,0,'(D) Nenhuma'),(33,9,0,'(A) my-function '),(34,9,0,'(B) size '),(35,9,0,'(C) -some word '),(36,9,1,'(D) This&that '),(37,10,1,'(A) $value1= $value? '),(38,10,0,'(B) $value1= # $value? '),(39,10,0,'(C) $value1= & $value? '),(40,10,0,'(D) Nenhuma'),(41,11,0,'(A) Variaveis locais'),(42,11,0,'(B) Parametro de funções'),(43,11,1,'(C) Variáveis escondidas '),(44,11,0,'(D) Variáveis Globais'),(45,12,0,'(A) somerar é 15 '),(46,12,1,'(B) somerar é 16 '),(47,12,0,'(C) somerar é 1'),(48,12,0,'(D) somerar é $somerar '),(49,13,0,'(A) Local '),(50,13,0,'(B) Parametro de função'),(51,13,1,'(C) Static'),(52,13,0,'(D) Nenhuma'),(53,14,0,'(A) porcentagem'),(54,14,0,'(B) bitwise or '),(55,14,0,'(C) divisão'),(56,14,1,'(D) modulo'),(103,15,0,'(A) Multiplicação'),(104,15,1,'(B) Concatenação'),(105,15,0,'(C) Objeto separado e seu membro'),(106,15,0,'(D) Delimitador'),(111,16,0,'(A) include() '),(112,16,0,'(B) require()'),(113,16,1,'(C) Todas acima'),(114,16,0,'(D) Nenhuma'),(119,17,0,'(A) include() '),(120,17,1,'(B) require() '),(121,17,0,'(C) Todas acima'),(122,17,0,'(D) Nenhuma'),(123,18,1,'(A) include() '),(124,18,0,'(B) require() '),(125,18,0,'(C) Todas acima'),(126,18,0,'(D) Nenhuma');
/*!40000 ALTER TABLE `answers_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers_2`
--

DROP TABLE IF EXISTS `answers_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers_2` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(9) NOT NULL,
  `correct_answer` tinyint(4) NOT NULL DEFAULT '0',
  `answer_description` varchar(255) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers_2`
--

LOCK TABLES `answers_2` WRITE;
/*!40000 ALTER TABLE `answers_2` DISABLE KEYS */;
INSERT INTO `answers_2` VALUES (1,1,0,'As variáveis podem, mas não precisam, ser declaradas antes da atribuição.'),(2,1,0,'Variáveis em PHP não possuem tipos intrínsecos - uma variável não sabe de antemão se será usada para armazenar um número ou uma cadeia de caracteres.'),(3,1,0,'As variáveis usadas antes de serem designadas têm valores padrão.'),(4,1,1,'Tudo acima.'),(5,2,0,'Strings'),(6,2,1,'Arrays'),(7,2,0,'Objetos'),(8,2,0,'Resources'),(9,3,0,'Para definir uma constante você tem que usar a função define ().'),(10,3,0,'Para recuperar o valor de uma constante, você precisa simplesmente especificar seu nome.'),(11,3,1,'Ambos mencionados acima.'),(12,3,0,'Nenhuma das acima.'),(13,4,1,'_METHOD_'),(14,4,0,'_FILE_'),(15,4,0,'_FUNCTION_'),(16,4,0,' _CLASS_'),(17,5,0,'redirect()'),(18,5,1,'header()'),(19,5,0,'reflect()'),(20,5,0,'None of the above.'),(21,6,0,'extract()'),(22,6,1,'in_array()'),(23,6,0,'key()'),(24,6,0,'krsort()'),(25,7,1,'função session_start()'),(26,7,0,'$_SESSION[]'),(27,7,0,'função isset()'),(28,7,0,'função session_destroy()'),(29,8,0,'$_FILES[\'file\'][\'tmp_name\']'),(30,8,0,' $_FILES[\'file\'][\'name\']'),(31,8,0,'$_FILES[\'file\'][\'size\']'),(32,8,1,'$_FILES[\'file\'][\'type\']'),(33,9,0,'getMessage()'),(34,9,0,'getCode()'),(35,9,1,'getTrace()'),(36,9,0,'getTraceAsString()'),(37,10,0,'class_name()'),(38,10,1,' __destruct'),(39,10,0,'destructor'),(40,10,0,'None of the above.');
/*!40000 ALTER TABLE `answers_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_1`
--

DROP TABLE IF EXISTS `questions_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_1` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_description` varchar(255) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_1`
--

LOCK TABLES `questions_1` WRITE;
/*!40000 ALTER TABLE `questions_1` DISABLE KEYS */;
INSERT INTO `questions_1` VALUES (1,'Detecta dado do tipo ímpar ?'),(2,'Quais dos seguintes são valores flutuantes válidos?'),(3,'Em PHP string são ?'),(4,'Qual dos seguintes métodos de delimitação é conhecido como string Interpolation'),(5,'Quais tipos de dados são tratados como arrays ?'),(6,'Quais dos seguintes são tipos de dados compostos ?'),(7,'Operador de conversção(casting) introduzido no PHP 6 é?'),(8,'Ao definir o identificador em PHP, você deve se lembrar disso?'),(9,'Identifique o identificador inválido?'),(10,'Qual das seguintes atribuições de variáveis é a atribuição por valor no PHP?'),(11,'Identificar o escopo da variável que não é suportado pelo PHP?'),(12,'Qual seria a saída do script abaixo ?\n\n$somerar=15;\n\nfunction addit() {\n\nGLOBAL $somerar;\n\n$somerar++ ;\n\necho \"somerar is $somerar\";\n\n}\n\naddit();'),(13,'Escopo variável no qual uma variável não perde seu valor quando a função existe e usa esse valor se a função for chamada novamente é?'),(14,'O operador de associação à esquerda % é usado em PHP para?'),(15,'O operador de ponto associativo esquerdo (.) É usado em PHP para?'),(16,'Qual das seguintes funções requer que o allow-url-fopen esteja habilitado?'),(17,'Em caso de falha de qual declaração a execução do script para de exibir mensagem de erro / aviso?'),(18,'Rastrear a função que continua a execução do script, mesmo se a inclusão do arquivo falhar');
/*!40000 ALTER TABLE `questions_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_2`
--

DROP TABLE IF EXISTS `questions_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_2` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_description` varchar(255) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_2`
--

LOCK TABLES `questions_2` WRITE;
/*!40000 ALTER TABLE `questions_2` DISABLE KEYS */;
INSERT INTO `questions_2` VALUES (1,'Qual das seguintes afirmações é verdadeira sobre variáveis php ?'),(2,'Quais dos seguintes tipos de variáveis são coleções nomeadas e indexadas de outros valores?'),(3,'Qual das alternativas a seguir está correta sobre constantes?'),(4,'Qual das seguintes constantes de magicas do PHP retorna o nome do método de classe?'),(5,'Qual das seguintes funções é usada para redirecionar uma página?'),(6,'Qual das seguintes funções verifica se existe um valor especificado em uma matriz?'),(7,'Qual das seguintes opções é usada para criar uma sessão?'),(8,'Qual das seguintes opções fornece o tipo de conteúdo do arquivo carregado no PHP?'),(9,'Qual dos seguintes métodos da classe Exception retorna array do backtrace?'),(10,'Qual dos seguintes métodos atua como uma função de destruição em uma classe PHP?');
/*!40000 ALTER TABLE `questions_2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-05 19:49:54
