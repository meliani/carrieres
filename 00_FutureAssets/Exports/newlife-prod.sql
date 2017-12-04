-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `newlife`;
CREATE DATABASE `newlife` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `newlife`;

DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `offre_de_stage_id` int(10) unsigned NOT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lettre_de_motivation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `applications_user_id_offre_de_stage_id_unique` (`user_id`,`offre_de_stage_id`),
  KEY `applications_offre_de_stage_id_foreign` (`offre_de_stage_id`),
  CONSTRAINT `applications_offre_de_stage_id_foreign` FOREIGN KEY (`offre_de_stage_id`) REFERENCES `offres_de_stages` (`id`) ON DELETE CASCADE,
  CONSTRAINT `applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `applications` (`id`, `user_id`, `offre_de_stage_id`, `cv`, `lettre_de_motivation`, `created_at`, `updated_at`) VALUES
(1,	3,	11,	'storage/uploads/students/CVs/171129_0747-Proposition_de_sujet_de_stage_M2.pdf',	'storage/uploads/students/LRs/171129_0747-Proposition_de_sujet_de_stage_M2.pdf',	'2017-11-29 19:47:18',	'2017-11-29 19:47:18'),
(3,	3,	13,	'storage/uploads/students/CVs/171129_0754-Proposition_de_sujet_de_stage_M2.pdf',	'storage/uploads/students/LRs/171129_0754-Proposition_de_sujet_de_stage_M2.pdf',	'2017-11-29 19:54:36',	'2017-11-29 19:54:36'),
(4,	3,	19,	'storage/uploads/students/CVs/171129_0754-Proposition_de_sujet_de_stage_M2.pdf',	'storage/uploads/students/LRs/171129_0754-Proposition_de_sujet_de_stage_M2.pdf',	'2017-11-29 19:54:51',	'2017-11-29 19:54:51'),
(5,	6,	13,	'storage/uploads/students/CVs/171130_0426-Classement Lauréats Juillet 2017-BP.pdf',	'storage/uploads/students/LRs/171130_0426-Classement & Contacts & CVs - Promotion Juillet 2017.pdf',	'2017-11-30 16:26:41',	'2017-11-30 16:26:41')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `user_id` = VALUES(`user_id`), `offre_de_stage_id` = VALUES(`offre_de_stage_id`), `cv` = VALUES(`cv`), `lettre_de_motivation` = VALUES(`lettre_de_motivation`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `applyables`;
CREATE TABLE `applyables` (
  `application_id` int(10) unsigned NOT NULL,
  `applyable_id` int(10) unsigned NOT NULL,
  `applyable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`application_id`,`applyable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `applyables` (`application_id`, `applyable_id`, `applyable_type`) VALUES
(1,	11,	'App\\Models\\offreDeStage'),
(3,	13,	'App\\Models\\offreDeStage'),
(4,	19,	'App\\Models\\offreDeStage'),
(5,	13,	'App\\Models\\offreDeStage')
ON DUPLICATE KEY UPDATE `application_id` = VALUES(`application_id`), `applyable_id` = VALUES(`applyable_id`), `applyable_type` = VALUES(`applyable_type`);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2017_02_22_171712_create_posts_table',	1),
(4,	'2017_11_14_111134_create_offres_stages_table',	1),
(5,	'2017_11_16_005800_create_offres_de_stages_table',	1),
(6,	'2017_11_16_222439_create_permission_tables',	1),
(7,	'2017_11_21_222439_create_applications_tables',	2)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `migration` = VALUES(`migration`), `batch` = VALUES(`batch`);

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1,	3,	'App\\User'),
(2,	6,	'App\\User'),
(2,	8,	'App\\User')
ON DUPLICATE KEY UPDATE `role_id` = VALUES(`role_id`), `model_id` = VALUES(`model_id`), `model_type` = VALUES(`model_type`);

DROP TABLE IF EXISTS `offres_de_stages`;
CREATE TABLE `offres_de_stages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_responsable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison_sociale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_de_stage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intitule_sujet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mots_cles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_offre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_valid` tinyint(1) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `offres_de_stages` (`id`, `nom_responsable`, `raison_sociale`, `lieu_de_stage`, `fonction`, `telephone`, `email`, `intitule_sujet`, `descriptif`, `mots_cles`, `document_offre`, `is_valid`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6,	'Mohamed EL MELIANI',	'rtrt',	'ttr',	'rtrt',	'+212661261404',	'melianiplus@gmail.com',	'rtrtrtrt',	'rtrtrtr',	'trtrtrt',	'storage/uploads//171121_1159-zlafa.jpg',	NULL,	NULL,	'2017-11-21 11:59:26',	'2017-11-21 12:00:13',	'2017-11-21 12:00:13'),
(7,	'Mohamed EL MELIANI',	'dfgdf',	'gdfg',	'dfgdfg',	'+212661261404',	'melianiplus@gmail.com',	'dfgdfgdf',	'gdfgdfgdfgd',	'dfgdfgdfgdfg',	'storage/uploads//171121_0357-logo.png',	NULL,	NULL,	'2017-11-21 15:57:53',	'2017-11-29 11:29:18',	'2017-11-29 11:29:18'),
(8,	'Mohamed EL MELIANI',	'sdfs',	'dqsd',	'qsdqs',	'+212661261404',	'melianiplus@gmail.com',	'dqsdqsd',	'qsdqsd',	'qsqsdqsd',	'storage/uploads//171121_0359-logo.png',	NULL,	NULL,	'2017-11-21 15:59:49',	'2017-11-29 11:29:22',	'2017-11-29 11:29:22'),
(9,	'Mohamed EL MELIANI',	'fdgg',	'gdfgfdg',	'dgd',	'+212661261404',	'melianiplus@gmail.com',	'dfgdfgdfgdffddfgdfg',	'dgdfgdfg',	'fgdfgdg',	NULL,	NULL,	NULL,	'2017-11-23 16:27:48',	'2017-11-29 11:29:25',	'2017-11-29 11:29:25'),
(10,	'Ali Nesh-Nash',	'110.55.',	'Casablanca',	'Directeur des Systèmes d\'Information',	'0662156600',	'alin@110-55.com',	'110.55. (www.110-55.com) est le premier cabinet de conseil en éducation au Maroc, il accompagne les structures éducatives (écoles, universités, structures de soutien scolaire…) dans leur transformation digitale, leur plan de croissance, et la refonte de leur processus organisationnels.\r\n110.55. plaide pour une vision scientifique de l\'enseignement. Notre société combine à cet effet les nouvelles technologies et les meilleurs pratiques pédagogiques et organisationnelles. Cette combinaison se traduit par l\'utilisation du digital et notamment de données numériques pour évaluer la qualité de l\'enseignement, la performance pédagogique et la progression des élèves.\r\nC\'est dans cet objectif que nos Systèmes d’Information sont implémentés. Nous regroupons des systèmes hétérogènes tels que : Système de gestion d\'apprentissage, Extranet, ETL, suite de business intelligence, technologies d\'application mobiles, aide à la décision, etc.\r\nNos équipes IT sont multidisciplinaires avec des compétences diverses.',	'Stage 1 : Evolution d\'une application mobile & web spécifique à la gestion de la marketplace, \r\nDéveloppement du Front-End et de la logique métier,\r\nIntégration avec des applications tiers (messagerie, SMS, etc.).\r\nLe stagiaire devra avoir une bonne maîtrise des technologies et une passion pour le web et les applications mobiles.\r\nLe stagiaire travaillera dans une équipe d’ingénieurs polyvalents et sera encadré par des développeur web & mobile expérimentés.\r\nTechnologie : CSS, HTML, Javascript, ionic Framework, Angular JS\r\nStage de pré-embauche rémunéré.\r\nPour postuler, contacter alin@110-55.com avec la référence WEB_2017\r\n\r\nStage 2 : Consultant Junior Data Analyst - Stage\r\nEnrichissement d\'un système consolidé de données permettant d\'avoir une vision 360° sur l\'ensemble des objets métiers de l\'entreprise. Pour cela, il devra effectuer une analyse de l\'existant ainsi qu\'une définition de la cible grâce à une expression de besoin. Cette expression de besoin est à construire avec l\'ensemble des acteurs du métier (direction pédagogique, administration, direction).\r\nConception d\'un système ETL adapté aux besoins collectés.\r\nA partir du système de BI de l\'entreprise, génération de rapports personnalisés de manière automatisée et intégration potentielle avec un serveur de messagerie (pour transmission automatique).\r\nMise en place de mécanisme d’aide à la décision pour le management\r\nLe stagiaire travaillera dans une équipe d’ingénieurs polyvalents et sera encadré par un data analyst expérimenté.\r\nTechnologies : JavaScript, Elastic Search, MySQL, NoSQL, Python, Reporting frameworks.\r\nStage de pré-embauche rémunéré.\r\nPour postuler, contacter alin@110-55.com avec la référence DATA_2017',	'Java, Web Developement, Anjular JS, ionic, Business Intelligence, Aide à la décision, SQL, Education, ETL.',	'storage/uploads//171123_0713-20171123_Stage Ecole INGE.docx',	0,	NULL,	'2017-11-23 19:13:21',	'2017-11-29 11:29:43',	NULL),
(11,	'Jamal Benhamou',	'Soft Centre',	'Technopark - Casablanca',	'Directeur',	'0673848054',	'sc.imane.bella@gmail.com',	'Réalisations de projets R&D logiciels innovants sur les thématiques technologiques suivantes : Java, Android, IOS, Html5, microservices, Big Data, traitement analytique des données',	'Opportunités de stage sur 2018\r\nAppel à candidatures – Etudiants ingénieurs\r\n\r\nLa campagne de sélection des stagiaires ingénieurs PFE pour le 1er semestre 2018 est ouverte.\r\nDate limite de réception des candidatures : 30 Novembre 2017.\r\n\r\nSi vous souhaitez effectuer votre stage de fin d’étude, au sein du Soft Centre, afin de contribuer à la réalisation de projets R&D innovants, dans le domaine du logiciel, en tandem avec nos équipes de recherche logicielle, il vous suffit de formaliser votre demande (si vous ne l\'avez pas encore fait) sur le lien url suivant : <a href=\"http://bit.ly/DossierCandidatureSoftCentre2017\">http://bit.ly/DossierCandidatureSoftCentre2017</a>',	'Java, Android, IOS, Html5, microservices, Big Data, traitement analytique des données',	NULL,	1,	NULL,	'2017-11-24 12:44:18',	'2017-11-29 16:15:00',	NULL),
(12,	'BOUNOUAR TAOUFIK',	'STRUCTIS MAROC',	'Casablanca',	'Responsable d\'équipe',	'00212661633554',	't.bounouar@bouygues-construction.com',	'Il y a plusieurs sujets PFE auteur des technologies suivantes :\r\n- SAP ECC\r\n- SAP BW\r\n- SAP BO\r\n- Office 365\r\n- Déveleppoment des applications Java\r\n- Création des indicateurs\r\n- Power BI\r\n- Modélisation du processus SAP AGILE (SQL)',	'Il y a plusieurs sujets PFE auteur des technologies suivantes :\r\n- SAP ECC\r\n- SAP BW\r\n- SAP BO\r\n- Office 365\r\n- Déveleppoment des applications Java\r\n- Création des indicateurs\r\n- Power BI\r\n- Modélisation du processus SAP AGILE (SQL)',	'PFE, stage',	NULL,	0,	NULL,	'2017-11-24 17:37:09',	'2017-11-29 11:29:41',	NULL),
(13,	'NOUSHI Fayçal',	'Zen Networks',	'Casablanca',	'CEO',	'0661560337',	'faycal.noushi@zen-networks.ma',	'Développement d\'une solution d\'automatisation',	'Contribution au développement d\'une solution d\'automatisation réseau avec focus sur l\'aspect backend.\r\nLe projet est initié par un client US qui cherche à déployer cette solution chez des opérateurs télécom.\r\n\r\nTechnologies:\r\nDéveloppement: Python, Javascript (front)\r\nDevOps: Docker, RabbitMQ, automatisation, microservices...',	'python automatisation devops docker',	NULL,	1,	NULL,	'2017-11-27 03:09:22',	'2017-11-29 19:33:04',	NULL),
(14,	'NOUSHI Fayçal',	'Zen Networks',	'Casablanca',	'CEO',	'0661560337',	'faycal.noushi@zen-networks.ma',	'Développement et automatisation de la stratégie de test',	'Le projet est initié par un client US qui cherche à déployer cette solution chez des opérateurs télécom.\r\n+ Développement des tests d\'une solution d\'automatisation\r\n+ Automatisation de ces tests selon des concepts de CI/CD\r\n\r\nTechnologies:\r\nDéveloppement: Python, Javascript (front)\r\nDevOps: Docker, RabbitMQ, automatisation, microservices...\r\nTesting: Jenkins, Selenium, CI/CD',	'python automatisation devops docker CI CD',	NULL,	1,	NULL,	'2017-11-27 03:16:42',	'2017-11-29 11:29:37',	NULL),
(15,	'EL ACHGAR Hicham',	'IT6',	'A préciser',	'A préciser',	'+212619790000',	'contact@it6.ma',	'Mise en place d’un Système d\'information géographique (SIG)',	'il s\'agit de réaliser la conception, intégration  et mis en œuvre  d’un Système d’information Géographique.',	'SI, SIG,',	NULL,	1,	NULL,	'2017-11-29 15:24:49',	'2017-11-29 16:41:52',	NULL),
(16,	'EL ACHGAR Hicham',	'IT6',	'A préciser',	'A préciser',	'+212619790000',	'contact@it6.ma',	'Développement d’une plateforme E commerce multi produits et services.',	'en se basant sur des framework existantes, l\'objectif est de développer une plateforme de Commerce intelligente permettant la vente de plusieurs produits et services.',	'Développement,E commerce,Commerce intelligente',	NULL,	1,	NULL,	'2017-11-29 15:33:15',	'2017-11-29 16:41:51',	NULL),
(17,	'EL ACHGAR Hicham',	'IT6',	'A préciser',	'A préciser',	'+212619790000',	'contact@it6.ma',	'Mise en place d\'une plateforme de gestion des risques informatique.',	'En se basant sur iso 27005, l’objectif est de développer un outil de management des risques SI.',	'Développement,SI,management des risques',	NULL,	1,	NULL,	'2017-11-29 15:33:21',	'2017-11-29 16:41:49',	NULL),
(18,	'EL ACHGAR Hicham',	'IT6',	'A préciser',	'A préciser',	'+212619790000',	'contact@it6.ma',	'Mise en place d\'une plateforme de  gestion des risques industriels.',	'En se basant sur iso 31 000, l’objectif est de développer un outil de management des risques SI.',	'Développement, SI, management des risques',	NULL,	1,	NULL,	'2017-11-29 15:33:25',	'2017-11-29 16:41:47',	NULL),
(19,	'ELAZREQ Youssef',	'4D SAS',	'Rabat',	'A préciser',	'0',	'elazreq.youssef@gmail.com',	'Seront dévoilés après collecte des CVs.',	'4D SAS is a French company owned by Laurent Ribardière. 4D has a US-based subsidiary 4D Inc. 4D was founded in 1984 when development began for Silver Surfer (early codename for 4D) and had its initial product release in 1987 with its own Programming Language. It is the developer and publisher of 4D (or 4th Dimension) and the original developer of Wakanda.',	'Développement, JS, Wakanda',	NULL,	1,	NULL,	'2017-11-29 16:10:24',	'2017-11-29 16:41:54',	NULL),
(20,	'Asmaa Touhami',	'intelcom',	'A préciser',	'A préciser',	'0',	'atouhami@intelcom.co.ma',	'Mise en place d’une solution d’automatisation des configurations dans un Data Center / Core Service Provider.',	'Mise en place d’une solution d’automatisation des configurations dans un Data Center / Core Service Provider.',	'réseau',	NULL,	1,	NULL,	'2017-11-29 18:15:33',	'2017-11-29 19:33:13',	NULL),
(21,	'Asmaa Touhami',	'intelcom',	'A préciser',	'A préciser',	'0',	'atouhami@intelcom.co.ma',	'Mise en place d’une solution de transport Multicast nouvelle génération dans un réseau Service Provider MPLS VPN',	'Mise en place d’une solution de transport Multicast nouvelle génération dans un réseau Service Provider MPLS VPN',	'réseau',	NULL,	1,	NULL,	'2017-11-29 18:16:03',	'2017-11-29 19:33:18',	NULL),
(22,	'Asmaa Touhami',	'intelcom',	'A préciser',	'A préciser',	'0',	'atouhami@intelcom.co.ma',	'Etude, Conception et Mise en place d’une solution générale de Cisco IP Communication Unifiée & Collaboration avec la possibilité de développer et intégrer des solutions CTI avec la Plateforme',	'Etude, Conception et Mise en place d’une solution générale de Cisco IP Communication Unifiée & Collaboration avec la possibilité de développer et intégrer des solutions CTI avec la Plateforme',	'Collaboration',	NULL,	1,	NULL,	'2017-11-29 18:16:54',	'2017-11-29 19:33:31',	NULL),
(23,	'Asmaa Touhami',	'intelcom',	'A préciser',	'A préciser',	'0',	'atouhami@intelcom.co.ma',	'Etude, Conception et Mise en place d’une solution de Centre d’Appels avec la possibilité de développer des Gadgets sur l’interface de l’Agent',	'Etude, Conception et Mise en place d’une solution de Centre d’Appels avec la possibilité de développer des Gadgets sur l’interface de l’Agent',	'Collaboration',	NULL,	1,	NULL,	'2017-11-29 18:17:01',	'2017-11-29 19:33:34',	NULL),
(24,	'Asmaa Touhami',	'intelcom',	'A préciser',	'A préciser',	'0',	'atouhami@intelcom.co.ma',	'Etude, Conception et Mise en place d’une solution de Visio Conférence avec la possibilité de développer un portail sécurisé pour consulter les enregistrements des séances de Visio Conférence.',	'Etude, Conception et Mise en place d’une solution de Visio Conférence avec la possibilité de développer un portail sécurisé pour consulter les enregistrements des séances de Visio Conférence.',	'Collaboration',	NULL,	1,	NULL,	'2017-11-29 18:17:15',	'2017-11-29 19:33:36',	NULL),
(25,	'Asmaa Touhami',	'intelcom',	'A préciser',	'A préciser',	'0',	'atouhami@intelcom.co.ma',	'Utilisation de Kali Linux  pour effectuer des audits de vulnérabilités et de pentesting.',	'Utilisation de Kali Linux  pour effectuer des audits de vulnérabilités et de pentesting.',	'Sécurité',	NULL,	1,	NULL,	'2017-11-29 18:17:30',	'2017-11-29 19:33:38',	NULL),
(26,	'Asmaa Touhami',	'intelcom',	'A préciser',	'A préciser',	'0',	'atouhami@intelcom.co.ma',	'Hardening des systèmes d’opérations Linux et Windows.',	'Hardening des systèmes d’opérations Linux et Windows.',	'Sécurité',	NULL,	1,	NULL,	'2017-11-29 18:17:46',	'2017-11-29 19:33:40',	NULL),
(27,	'Abdelghani SAROH',	'GLOBAL S2i',	'Casablanca',	'Directeur associé',	'+212522775375',	'asaroh@globals2i.ma',	'Développer une plateforme d’échanges  de flux entre notre plateforme médicale et les organismes d’assurance, de mutuelle et la CNSS',	'5ème année, maitrisant la nouvelle technologie, la langue Française & anglaise (rédaction des docs)  ',	'JAVA,J2EE,HIBERNATE,PRIME FACES,JBOSS,MYSQL,ORACLE,ANGULAR,JQUERY,JAVASCRIPT, XML',	NULL,	1,	NULL,	'2017-11-29 18:23:07',	'2017-11-29 19:33:42',	NULL),
(28,	'Abdelghani SAROH',	'GLOBAL S2i',	'Casablanca',	'Directeur associé',	'+212522775375',	'asaroh@globals2i.ma',	'développer la gestion d’un cabinet médical (dentiste, médecine générale et spécialisée)',	'5ème année, maitrisant la nouvelle technologie, la langue Française & anglaise (rédaction des docs)  ',	'JAVA,J2EE,HIBERNATE,PRIME FACES,JBOSS,MYSQL,ORACLE,ANGULAR,JQUERY,JAVASCRIPT, XML',	NULL,	1,	NULL,	'2017-11-29 18:24:18',	'2017-11-29 19:33:44',	NULL),
(29,	'Abdelghani SAROH',	'GLOBAL S2i',	'Casablanca',	'Directeur associé',	'+212522775375',	'asaroh@globals2i.ma',	'Développer une application permettant à chaque patient d’avoir son dossier médical sur une carte',	'5ème année, maitrisant la nouvelle technologie, la langue Française & anglaise (rédaction des docs)  ',	'JAVA,J2EE,HIBERNATE,PRIME FACES,JBOSS,MYSQL,ORACLE,ANGULAR,JQUERY,JAVASCRIPT, XML',	NULL,	1,	NULL,	'2017-11-29 18:24:56',	'2017-11-29 19:33:46',	NULL),
(30,	'Rachid Khazaz',	'enova',	'Rabat',	'Directeur associé',	'+212537563607',	'contact@my-enova.com',	'Mise en place d\'une plateforme de supervision. (rémunéré)',	'Il s\'agit de mettre en place une plateforme de supervision à base d\'outil open source (Nagios, Eye of network ou autre....) afin de superviser des services réseaux, bases de données et applications. Les agents seront connectés à la plateforme via un réseau VPN à construire. Une application mobile est à mettre en place afin de recevoir des notifications pré paramétrés.\r\nPrérequis : expérience préalable en mise en place d\'outil de supervision, Nagios ou autre.',	'Développement,SI,supervision,Nagios',	NULL,	1,	NULL,	'2017-11-29 18:36:45',	'2017-11-29 19:33:05',	NULL),
(31,	'MESSOU Moulay Driss',	'EDESAT',	'A préciser',	'Ingénieur en Informatique et Télécoms',	'+212661499886',	'moulaydriss.messou@edesat.com',	'Analyse comparative des résultats des enquêtes TIC 2015 et 2016.',	'Analyse comparative des résultats des enquêtes TIC 2015 et 2016.',	'Analyse',	NULL,	1,	NULL,	'2017-11-29 18:47:34',	'2017-11-29 19:32:56',	NULL),
(32,	'MESSOU Moulay Driss',	'EDESAT',	'A préciser',	'Ingénieur en Informatique et Télécoms',	'+212661499886',	'moulaydriss.messou@edesat.com',	'Analyse des équipements TIC et leurs évolution au Maroc.',	'Analyse des équipements TIC et leurs évolution au Maroc.',	'Analyse',	NULL,	1,	NULL,	'2017-11-29 18:47:48',	'2017-11-29 19:33:02',	NULL),
(33,	'MESSOU Moulay Driss',	'EDESAT',	'A préciser',	'Ingénieur en Informatique et Télécoms',	'+212661499886',	'moulaydriss.messou@edesat.com',	'Perspective de l\'introduction et la généralisation de la fibre optique au Maroc (FTTH).',	'Perspective de l\'introduction et la généralisation de la fibre optique au Maroc (FTTH).',	'Analyse',	NULL,	1,	NULL,	'2017-11-29 18:48:02',	'2017-11-29 19:32:58',	NULL),
(34,	'Abdellatif BOUMHALI',	'SisPay',	'Casablanca',	'Managing director',	'+21222208259',	'abdellatif.boumhali@sispay.net',	'Serveur de Gestion PKI, serveur TLS.',	'Serveur de Gestion PKI, serveur TLS.',	'Développement, monétique',	NULL,	1,	NULL,	'2017-11-29 18:51:30',	'2017-11-29 19:33:47',	NULL),
(35,	'Abdellatif BOUMHALI',	'SisPay',	'Casablanca',	'Managing director',	'+21222208259',	'abdellatif.boumhali@sispay.net',	'3D sécure.',	'3D sécure.',	'Développement, monétique',	NULL,	1,	NULL,	'2017-11-29 18:51:48',	'2017-11-29 19:33:49',	NULL),
(36,	'Abdellatif BOUMHALI',	'SisPay',	'Casablanca',	'Managing director',	'+21222208259',	'abdellatif.boumhali@sispay.net',	'System de gestion de la fraude online.',	'System de gestion de la fraude online.',	'Développement, monétique',	NULL,	1,	NULL,	'2017-11-29 18:52:06',	'2017-11-29 19:33:51',	NULL),
(37,	'Abdellatif BOUMHALI',	'SisPay',	'Casablanca',	'Managing director',	'+21222208259',	'abdellatif.boumhali@sispay.net',	'Mise en place d’une plateforme micro service et d’un API gateway.',	'Mise en place d’une plateforme micro service et d’un API gateway.',	'Développement, monétique',	NULL,	1,	NULL,	'2017-11-29 18:52:23',	'2017-11-29 19:33:24',	NULL),
(38,	'Zineb NAJIB',	'BMCE CAPITAL',	'Casablanca',	'HR Business Partner',	'+212684889274',	'z.najib@bmcek.co.ma',	'Sujet en Ingénierie informatique',	'Déposer votre candidature, vous serez informés de la suite une fois votre CV sera retenu.',	'Ingénierie informatique',	NULL,	1,	NULL,	'2017-11-29 18:59:21',	'2017-11-29 19:33:06',	NULL),
(39,	'Fabien Courreges',	'l’institut de recherche XLIM',	'France',	'Maître de conférences',	'0',	'fabien.courreges@unilim.fr',	'Développement, intégration et mise au point de la chaine de traitement d’un nœud de réseau de capteurs sans fils dans une articulation robotique',	'Stage Rémunéré.\r\nCompétences requises : réseaux, capteurs, communication RF sans fil, électronique analogique et numérique, programmation C/C++, électromagnétisme, mathématiques, anglais.\r\nCompétences appréciées : traitement de signal, robotique',	'Développement,réseaux, capteurs, communication RF sans fil, électronique analogique et numérique, programmation C/C++, électromagnétisme, mathématiques, anglais.',	'storage/uploads//171129_0708-Proposition_de_sujet_de_stage_M2.pdf',	1,	NULL,	'2017-11-29 19:08:53',	'2017-11-29 19:33:53',	NULL),
(40,	'Karim Zriouel',	'iresen',	'A préciser',	'A préciser',	'0',	'zriouel@iresen.org',	'Appel a candidature.',	'Déposer votre candidature, vous serez informés de la suite une fois votre CV sera retenu.',	'Ingénierie',	NULL,	1,	NULL,	'2017-11-29 19:20:17',	'2017-11-29 19:33:00',	NULL),
(41,	'Mohammed DAOUDI',	'tractafric',	'A préciser',	'A préciser',	'0',	'mohammed.daoudi@tractafric.com',	'Appel a candidature.',	'Déposer votre candidature, vous serez informés de la suite une fois votre CV sera retenu.',	'Ingénierie',	NULL,	1,	NULL,	'2017-11-29 19:21:52',	'2017-11-29 19:32:51',	NULL),
(42,	'Larissa BABONGUI',	'LAAS-CNRS',	'France',	'Service du Personnel du LAAS-CNRS',	'+33561337876',	'ilbabong@laas.fr',	'Voir le descriptif.',	'les sujets de stage pour l’année 2017/2018 sont en ligne sur notre site internet que vous trouverez à cette adresse :\r\n\r\n<a href=\"https://app.laas.fr/boreal/web/fr/liste/stage/simple\"> https://app.laas.fr/boreal/web/fr/liste/stage/simple</a>\r\n\r\nSi parmi les sujet qui sont proposés certains intéressent vos étudiants, nous les invitons à postuler via le formulaire web prévu à cet effet.\r\n\r\nIl se peut que certaines offres de stages de l’année 2016/2017 soient toujours, en ligne (car n’ayant pas été pourvu). Nous les invitons à se connecter, car les offres sont souvent remises à jour.',	'Simulation, Robotique mobile,semiconducteurs III-V, Nanotechnology, nanofils semi-conducteurs, nanofil',	NULL,	1,	NULL,	'2017-11-29 19:31:35',	'2017-11-29 19:32:59',	NULL),
(43,	'el bouanani salim',	'MIT',	'Marrakech',	'Gerant',	'0',	'contact@mit-agency.com',	'Security in an IoT environment, implementation of a case study and a solution of Access control model based on PerBac',	'Technologies : Python, Java, Raspeberry , Arduino .....',	'IoT',	NULL,	1,	NULL,	'2017-11-29 19:49:54',	'2017-11-29 19:52:42',	NULL),
(44,	'BERADY RABII',	'Business Optimising Consulting Group',	'Casablanca',	'Managing Partner',	'0664664692',	'rberady@businessocg.com',	'Voir le descriptif.',	'Stage essentiellement dans le développement informatique, et dans l\'accompagnement terrain en entrepreneuriat (programmes avec des fondations et ONG)',	'Entrepreneuriat,Employabilité,Développement informatique',	NULL,	1,	NULL,	'2017-11-29 19:52:34',	'2017-11-29 19:52:45',	NULL)
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `nom_responsable` = VALUES(`nom_responsable`), `raison_sociale` = VALUES(`raison_sociale`), `lieu_de_stage` = VALUES(`lieu_de_stage`), `fonction` = VALUES(`fonction`), `telephone` = VALUES(`telephone`), `email` = VALUES(`email`), `intitule_sujet` = VALUES(`intitule_sujet`), `descriptif` = VALUES(`descriptif`), `mots_cles` = VALUES(`mots_cles`), `document_offre` = VALUES(`document_offre`), `is_valid` = VALUES(`is_valid`), `status` = VALUES(`status`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`), `deleted_at` = VALUES(`deleted_at`);

DROP TABLE IF EXISTS `offres_stages`;
CREATE TABLE `offres_stages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_responsable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison_sociale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_de_stage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intitules_sujets` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mots_cles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1,	'Administer roles & permissions',	'web',	'2017-11-20 16:13:42',	'2017-11-20 16:13:42'),
(2,	'Use Frontend',	'web',	'2017-11-29 12:26:01',	'2017-11-29 12:26:01')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `guard_name` = VALUES(`guard_name`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'web',	'2017-11-20 16:13:50',	'2017-11-20 16:13:50'),
(2,	'Etudiant',	'web',	'2017-11-29 12:26:26',	'2017-11-29 12:26:26')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `guard_name` = VALUES(`guard_name`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1,	1),
(2,	2)
ON DUPLICATE KEY UPDATE `permission_id` = VALUES(`permission_id`), `role_id` = VALUES(`role_id`);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3,	'Mohamed EL MELIANI',	'melianiplus@gmail.com',	'$2y$10$W2cepr0FmjJa6j4Q4HRyReTi4cjDmaYKgdS8slOl4EaSkiNlGMEpW',	'IZet3Ud96dqyGvEeipRNNppz7jdd5P2BptoMo1N7rx5F6aPbbovIMHUiSSa4',	'2017-11-20 16:13:02',	'2017-11-20 16:14:10'),
(4,	'Mohamed EL MELIANI',	'elmeliani@inpt.ac.ma',	'$2y$10$S2cMbjQIHyptGRhIk1slc.D0W1KqREKREC9euqd.gXerlCei3s4jy',	'XV793ViESNnM0P7OIig5yq58CNHvu58RKMdSF2wvbyiOAkvathzBqEipTtBk',	'2017-11-21 15:57:06',	'2017-11-21 15:57:06'),
(5,	'hachimi ahmed amine',	'dsdsds@gmail.com',	'$2y$10$Y9Qdb3H1GNbnobvfELf5uOjvarLBLv02VVpPS7VjriG7jjewOE9OW',	NULL,	'2017-11-28 11:21:37',	'2017-11-28 11:21:37'),
(6,	'Aziz HILALI',	'hilali@inpt.ac.ma',	'$2y$10$fbw4ZbPMl1cvtpnOribPbuIsExXf2hoKdIPW8.1e8MSA6nHLfNKJa',	'MWvlFm70mPUziExc86nAYrDo62sw9PdGxVwxwMnpR6KgCRhsm96TE4QHEBy8',	'2017-11-29 11:21:37',	'2017-11-29 12:27:19'),
(7,	'ERRAZIKI',	'sdsdds@gmail.com',	'$2y$10$xDSeZLXVOPq8Np3swUxHxeK4TsS.H4q89nCLJdYbMPJk1VnhxVQ72',	NULL,	'2017-11-29 15:30:17',	'2017-11-29 15:30:17'),
(8,	'Ilham',	'ilhamait@gmail.com',	'$2y$10$7YTc9EnQ6A4YzLX41gIl0.u8aDHAC1GKtvT/bQl3z/WJRHhaKAHBK',	'9tH1cg5yPX0H10NLhsOEtW3Qepk7qaAY64xPfIRQEl3tSBvDOpVKer1bCL5t',	'2017-11-29 22:20:10',	'2017-11-30 19:59:10'),
(9,	'reserved',	'reserved',	'reserved',	NULL,	'2017-11-30 18:42:16',	'2017-11-30 18:42:16'),
(11,	'reserved2',	'reserved2',	'reserved',	NULL,	'2017-11-30 18:42:53',	'2017-11-30 18:42:53'),
(12,	'reserved3',	'reserved3',	'reserved',	NULL,	'2017-11-30 18:43:15',	'2017-11-30 18:43:15'),
(13,	'reserved4',	'reserved4',	'reserved',	NULL,	'2017-11-30 18:43:26',	'2017-11-30 18:43:26'),
(14,	'reserved5',	'reserved5',	'reserved',	NULL,	'2017-11-30 18:43:39',	'2017-11-30 18:43:39'),
(16,	'reserved6',	'reserved6',	'reserved',	NULL,	'2017-11-30 18:44:07',	'2017-11-30 18:44:07'),
(17,	'reserved7',	'reserved7',	'reserved',	NULL,	'2017-11-30 18:44:29',	'2017-11-30 18:44:29'),
(18,	'reserved8',	'reserved8',	'reserved',	NULL,	'2017-11-30 18:44:45',	'2017-11-30 18:44:45'),
(19,	'reserved9',	'reserved9',	'reserved',	NULL,	'2017-11-30 18:44:59',	'2017-11-30 18:44:59'),
(20,	'reserved10',	'reserved10',	'reserved',	NULL,	'2017-11-30 18:45:21',	'2017-11-30 18:45:21'),
(21,	'reserved11',	'reserved11',	'reserved',	NULL,	'2017-11-30 18:45:56',	'2017-11-30 18:45:56'),
(22,	'reserved12',	'reserved12',	'reserved',	NULL,	'2017-11-30 18:46:08',	'2017-11-30 18:46:08'),
(23,	'reserved13',	'reserved13',	'reserved',	NULL,	'2017-11-30 18:46:18',	'2017-11-30 18:46:18'),
(24,	'reserved14',	'reserved14',	'reserved',	NULL,	'2017-11-30 18:46:35',	'2017-11-30 18:46:35')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `name` = VALUES(`name`), `email` = VALUES(`email`), `password` = VALUES(`password`), `remember_token` = VALUES(`remember_token`), `created_at` = VALUES(`created_at`), `updated_at` = VALUES(`updated_at`);

-- 2017-12-01 22:57:06
