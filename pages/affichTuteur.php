<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Repositories\TuteurRepository;

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
    $tuteur = New TuteurRepository();
    foreach($tuteur->getTuteurs() as $tute)
        echo '<tr><td>',$tute['cNom'],'</td><td>',$tute['cPrenom'],'</td><td>',$tute['cMail'],'</td><td>',$tute['cNomRole'];
    ?>
  </tbody>
</table>
    

    

    

<?php include('../utiles/footer.php'); ?>