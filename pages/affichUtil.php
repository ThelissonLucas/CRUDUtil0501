<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Repositories\PersonneRepository;
?>
<title>Affichage des utilisateurs</title>

<a href="ajoutUtil.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Ajouter un nouvel utilisateur </a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Mail</th>
      <th scope="col">Role</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $personne = New PersonneRepository();
    foreach($personne->getPersonneWRole() as $pers)
        echo '<tr><td>',$pers['cNom'],'</td><td>',$pers['cPrenom'],'</td><td>',$pers['cMail'],'</td><td>',$pers['cNomRole'];
    ?>
  </tbody>
</table>

<a href="ajoutUtil.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> Ajouter un nouvel utilisateur </a>
    

    

<?php include('../utiles/footer.php'); ?>