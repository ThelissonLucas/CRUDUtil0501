<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Entities\Personne;
use App\Entities\Etudiant;
use App\Entities\Avoir;

use App\Repositories\PersonneRepository;
use App\Repositories\EtudiantRepository;
use App\Repositories\AvoirRepository;

//$roleutil = $_POST['roleutil'];

//var_dump($roleutil);

if(!empty($_POST['radioetudiant'])){ 
    $personne = New Personne(); 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    var_dump("coucou");
    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); 

    $avoirEtudiant = New Avoir(); 
    $avoirEtudiant->setiIdRole(4);
    $avoirEtudiant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository;
    $AvoirRepo->save($avoirEtudiant);

    //echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if(!empty($_POST['radiotuteur'])){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); 

    $avoirTuteur = New Avoir(); 
    $avoirTuteur->setiIdRole(3);
    $avoirTuteur->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; 
    $AvoirRepo->save($avoirTuteur);

    //echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if(!empty($_POST['radioenseignant'])){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); 

    $avoirEnseignant = New Avoir(); 
    $avoirEnseignant->setiIdRole(2);
    $avoirEnseignant->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; 
    $AvoirRepo->save($avoirEnseignant);

    //echo("<script>location.href = '../pages/affichUtil.php';</script>"); 
}
else if(!empty($_POST['radioadmin'])){
    $personne = New Personne(); // On créé la personne 
    $personne->setCNom($_POST['nomutil']);
    $personne->setCPrenom($_POST['prenomutil']);
    $personne->setCMail($_POST['emailutil']);
    $personne->setCMDP(password_hash($_POST['mdputil'], PASSWORD_BCRYPT));
    $personne->setBInactif(0);

    $PersonneRepository = New PersonneRepository;
    $data = $PersonneRepository->save($personne); 

    $avoirAdmin = New Avoir(); 
    $avoirAdmin->setiIdRole(1);
    $avoirAdmin->setiIdPersonne($data->getId());

    $AvoirRepo = New AvoirRepository; 
    $AvoirRepo->save($avoirAdmin);

    //echo("<script>location.href = '../pages/affichUtil.php';</script>"); // Redirection vers la liste des personnes
}

?>




<?php include('../utiles/footer.php'); ?>