<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Repositories\PersonneRepository;
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Mail</th>
      <th scope="col">Etat</th>
      <th scope="col">Role</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $personne = New PersonneRepository();
    foreach($personne->getAll() as $pers)
        echo '<tr><td>',$pers->getCNom(),'</td><td>',$pers->getCPrenom(),'</td><td>',$pers->getCMail();
    ?>
  </tbody>
</table>
    

    

    

<?php include('../utiles/footer.php'); ?>