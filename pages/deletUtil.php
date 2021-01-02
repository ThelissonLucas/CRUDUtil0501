<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Repositories\PersonneRepository;

$idPersonne = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$Personne = new PersonneRepository;
$persodelete = $Personne->getById($idPersonne);
$Personne->deleteById($persodelete->getId());
echo("<script>location.href = '../pages/affichUtil.php';</script>"); // Redirection vers la liste des personnes
?>


<?php include('../utiles/footer.php'); ?>