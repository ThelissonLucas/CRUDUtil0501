<?php
//  Permet d'utiliser le typage fort si strict_types=1
//  !! Laisser en première ligne
declare(strict_types=1);

//  Basculer à TRUE pour activer les affichages de debug, les var_dump ou les dump_var.
//  Basculer à FALSE pour passer en prod. Les erreurs ne seront plus affichées mais loggées dans le fichier /log/error_log.txt
define('DUMP', TRUE);

//  Si nécessaire, en dev uniquement, décommentez et basculez à TRUE pour activer les affichages de debug dans la librairie Phaln
//define('DEBUG_PHALN', FALSE);

//  L'url de votre site, sera utile dans les pages en cas de déplacement du site...
define('URL_BASE', "http://host/myWebSite/");


//  Vos informations de connexion à la BDD
$infoBdd = array(
		'interface' => 'pdo',	    // API d'accès à la base de données
		'type'   => 'mysql',	    // mysql ou pgsql
		'host'   => '',		    // url du serveur de bdd
		'port'   =>  3306,	    // Par défaut: 5432 pour postgreSQL, 3306 pour MySQL
		'charset' => 'UTF8',	    // Le charset utilisé pour la bdd
    		'dbname' => '',		    // Le nom de la base de données
		'user'   => '',		    // Le nom d'utilisateur pour la bdd
		'pass'   => '',		    // Le password de l'utilisateur
	);

require_once 'globalConfig.php';

//  Lancement des sessions, si ce n'est pas déjà fait.
//  Le faire après l'inclusion de 'globalConfig.php' permet d'avoir l'autoload actif
//  et de pouvoir désérializer des objets depuis les sessions.
if(session_status() === PHP_SESSION_NONE) session_start();