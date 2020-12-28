<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Repositories\EnseignantRepository;

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
    $prof = New EnseignantRepository();
    foreach($prof->getEnseignants() as $prof)
        echo '<tr><td>',$prof['cNom'],'</td><td>',$prof['cPrenom'],'</td><td>',$prof['cMail'],'</td><td>',$prof['cNomRole'];
    ?>
  </tbody>
</table>
    

    

    

<?php include('../utiles/footer.php'); ?>