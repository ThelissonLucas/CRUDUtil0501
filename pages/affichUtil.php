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
    

    

    

<?php include('../utiles/footer.php'); ?>