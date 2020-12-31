<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Repositories\PersonneRepository;

$idPersonne = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // On filtre/nettoie la variable en GET
$Personne = new PersonneRepository;
$personneModif = $Personne->getById($idPersonne);
?>


<?php include('../utiles/footer.php'); ?>