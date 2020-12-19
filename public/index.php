<?php
require_once '../config/appConfig.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>PhalnApplicationSkeleton</title>
    <meta charset="utf-8">
    <!--    Vos feuilles de style ici.
	    Commencez par normalize.css qui fait le "reset" css.
	    Ajoutez d'autres fichiers de styles.
    -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
	<!-- Le bandeau entête de votre page ici -->
	<img class="imgLogo" src="img/logoPhaln.png" alt="Logo Phaln"><h1>Application with Phaln for OLEN</h1>
    </header>
    <div id="main">
	<!-- La partie principale de votre page ici -->
	<nav>
	    <!-- Votre menu de navigation ici -->
	    <menu>
		<li><a href="<?= URL_BASE ?>/docs/InstallationConfiguration.txt">Installation & configuration</a></li>
		<li><a href="<?= URL_BASE ?>/README.MD">Read me</a></li>
		<li><a href="https://demophalntwig.phaln.info">Démonstration en ligne</a></li>
	    </menu>
	</nav>
	<div id="corps">
    	<!-- Le contenu de votre page ici -->
	    <h1>Hello !!</h1>
	    <p>Bienvenue en OLEN.</p>
	    <p>Un exemple de structure d'une application web basée sur la micro-librairie Phaln.</p>
	</div>
    </div>
    <footer>
	<!-- Le pied de votre page ici -->
        <p>Développement PHP - Sept. 2020</p>
    </footer>
</body>
</html>
