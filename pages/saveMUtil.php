<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Entities\Personne;
use App\Entities\Etudiant;
use App\Entities\Avoir;

use App\Repositories\PersonneRepository;
use App\Repositories\EtudiantRepository;
use App\Repositories\AvoirRepository;

$roleutil = $_POST['roleutil'];

$idPersonne = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // On filtre/nettoie la variable en GET
$Personne = new PersonneRepository;
$personneModif = $Personne->getById($idPersonne);

if($roleutil = 'etudiant'){ 
    $personneModif->setCNom($_POST['nomutil']);
    $personneModif->setCPrenom($_POST['prenomutil']);
    $personneModif->setCMail($_POST['emailutil']);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personneModif); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(4);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository;
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'tuteur'){
    $personneModif->setCNom($_POST['nomutil']);
    $personneModif->setCPrenom($_POST['prenomutil']);
    $personneModif->setCMail($_POST['emailutil']);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personneModif); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(4);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository;
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'enseignant'){
    $personneModif->setCNom($_POST['nomutil']);
    $personneModif->setCPrenom($_POST['prenomutil']);
    $personneModif->setCMail($_POST['emailutil']);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personneModif); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(4);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository;
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'admin'){
    $personneModif->setCNom($_POST['nomutil']);
    $personneModif->setCPrenom($_POST['prenomutil']);
    $personneModif->setCMail($_POST['emailutil']);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personneModif); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(4);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository;
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}

?>




<?php include('../utiles/footer.php'); ?>