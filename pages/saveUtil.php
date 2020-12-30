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


if($roleutil = 'etudiant'){ // ETUDIANT
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); // On ajoute la personne dans la BDD

    $avoirEtudiant = New Avoir(); // On créé un objet avoir pour le rôle Etudiant
    $avoirEtudiant->setiIdRole(4); // 1 pour le rôle du Etudiant
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; // On ajoute le rôle correspondants dans la BDD
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); // Redirection vers la liste des personnes
}
else if($roleutil = 'tuteur'){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); // On ajoute la personne dans la BDD

    $avoirEtudiant = New Avoir(); // On créé un objet avoir pour le rôle Etudiant
    $avoirEtudiant->setiIdRole(3); // 1 pour le rôle du tuteur
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; // On ajoute le rôle correspondants dans la BDD
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); // Redirection vers la liste des personnes
}
else if($roleutil = 'enseignant'){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); // On ajoute la personne dans la BDD

    $avoirEtudiant = New Avoir(); // On créé un objet avoir pour le rôle Etudiant
    $avoirEtudiant->setiIdRole(2); // 1 pour le rôle du Etudiant
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; // On ajoute le rôle correspondants dans la BDD
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); // Redirection vers la liste des personnes
}
else if($roleutil = 'admin'){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); // On ajoute la personne dans la BDD

    $avoirEtudiant = New Avoir(); // On créé un objet avoir pour le rôle Etudiant
    $avoirEtudiant->setiIdRole(1); // 1 pour le rôle du Etudiant
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; // On ajoute le rôle correspondants dans la BDD
    $AvoirRepo->save($avoirEtudiant);

    echo("<script>location.href = '../pages/affichUtil.php';</script>"); // Redirection vers la liste des personnes
}

?>




<?php include('../utiles/footer.php'); ?>