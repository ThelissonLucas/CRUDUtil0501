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


if($roleutil = 'etudiant'){ 
    $personne = New Personne(); 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(4);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository;
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'tuteur'){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(3);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; 
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'enseignant'){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(2);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; 
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if($roleutil = 'admin'){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(1);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; 
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); // Redirection vers la liste des personnes
}

?>




<?php include('../utiles/footer.php'); ?>