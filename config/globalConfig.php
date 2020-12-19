<?php
// Définition des chemins:
define('BASE_DIR', dirname(dirname(__FILE__)));					    //  Le dossier de l'application
define('PUBLIC_DIR', BASE_DIR.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR);    //  Pour les fichiers publics
define('CONFIG_DIR', BASE_DIR.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR);    //  Pour les fichiers de configuration
define('SRC_DIR', BASE_DIR.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR);	    //  Pour vos classes
define('VENDOR_DIR', BASE_DIR.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR);    //  Pour /vendor
define('PHALN_DIR', VENDOR_DIR.'phaln'.DIRECTORY_SEPARATOR);			    //  Pour la librairie Phaln
define('LOG_DIR', BASE_DIR.DIRECTORY_SEPARATOR.'log'.DIRECTORY_SEPARATOR);	    //  Pour les fichiers de journalisation
define('TEMPLATE_PATH', SRC_DIR. 'App'. DIRECTORY_SEPARATOR .'Templates'.DIRECTORY_SEPARATOR);//  Pour les templates


//  Définition du path d'inclusion
define('CLASS_DIR', SRC_DIR . PATH_SEPARATOR . PHALN_DIR);
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);


//  Active ou pas l'affichage de debug et les var_dump
if (DUMP) {
    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', 'On');
} 
else {
    error_reporting(E_ALL);
    ini_set('display_errors','Off');  
    ini_set('log_errors',  'On');
    ini_set('error_log',  LOG_DIR.'error_log.txt');
}


//  Autoload avec prise en compte des espaces de nom et compatibilité Linux (pb des séparateurs d'espace de nom...)
spl_autoload_register(function ($className) {
    $extension = '.php';
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once($className.$extension);
});


//  Si on a installé des modules avec composer, il faut sans doute aussi utiliser l'autoload qui est dans vendor.
if(file_exists(VENDOR_DIR.'autoload.php'))
{
    require_once(VENDOR_DIR.'autoload.php');
}

//  Si la librairie Phaln est utilisée, il faut la configurer avec 
//  les informations de connexion à la base de données.
//  Ces informations se trouve dans appConfig.php
if(file_exists(PHALN_DIR. DIRECTORY_SEPARATOR .'Phaln'. DIRECTORY_SEPARATOR .'BDD.php') && class_exists('Phaln\BDD'))
{
    Phaln\BDD::$infoBdd = $infoBdd;
}

//  Utilise le fichier de configuration de la librairie PhAln
//  Ce fichier contient aussi la fonction dump_var() assez utile...
$phalnConfigFile = PHALN_DIR.DIRECTORY_SEPARATOR.'Phaln'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'phalnConfig.php';
if(file_exists($phalnConfigFile))
{
    require_once($phalnConfigFile);
}
