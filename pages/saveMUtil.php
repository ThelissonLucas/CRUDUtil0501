<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Entities\Personne;
use App\Entities\Etudiant;
use App\Entities\Avoir;

use App\Repositories\PersonneRepository;
use App\Repositories\EtudiantRepository;
use App\Repositories\AvoirRepository;

// $roleutil = $_POST['roleutil'];

$idPersonne = $_POST['idpersonne']; 
var_dump($idPersonne);
$Personne = new PersonneRepository;
$personneModif = $Personne->getById($idPersonne);

var_dump($personneModif);

if($roleutil = 'etudiant'){ 
    $personneModif->setCNom($_POST['nomutil']);
    $personneModif->setCPrenom($_POST['prenomutil']);
    $personneModif->setCMail($_POST['emailutil']);
    $personneModif->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personneModif); 

//  $avoirEtudiant = New Avoir(); 
//  $avoirEtudiant->setiIdRole(4);
//  $avoirEtudiant->setiIdPersonne($data->getId());
//  
//  $AvoirRepo = New AvoirRepository;
//  $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'tuteur'){
    $personneModif->setCNom($_POST['nomutil']);
    $personneModif->setCPrenom($_POST['prenomutil']);
    $personneModif->setCMail($_POST['emailutil']);
    $personneModif->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personneModif); 

//  $avoirEtudiant = New Avoir(); 
//  $avoirEtudiant->setiIdRole(4);
//  $avoirEtudiant->setiIdPersonne($data->getId());
//  
//  $AvoirRepo = New AvoirRepository;
//  $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'enseignant'){
    $personneModif->setCNom($_POST['nomutil']);
    $personneModif->setCPrenom($_POST['prenomutil']);
    $personneModif->setCMail($_POST['emailutil']);
    $personneModif->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personneModif); 

//  $avoirEtudiant = New Avoir(); 
//  $avoirEtudiant->setiIdRole(4);
//  $avoirEtudiant->setiIdPersonne($data->getId());
//  
//  $AvoirRepo = New AvoirRepository;
//  $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'admin'){
    $personneModif->setCNom($_POST['nomutil']);
    $personneModif->setCPrenom($_POST['prenomutil']);
    $personneModif->setCMail($_POST['emailutil']);
    $personneModif->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personneModif); 

//  $avoirEtudiant = New Avoir(); 
//  $avoirEtudiant->setiIdRole(4);
//  $avoirEtudiant->setiIdPersonne($data->getId());
//  
//  $AvoirRepo = New AvoirRepository;
//  $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}

?>




<?php include('../utiles/footer.php'); ?>