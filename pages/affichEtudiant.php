<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Repositories\EtudiantRepository;

?>
<title>Affichage des etudiants</title>
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
    $eleve = New EtudiantRepository();
    foreach($eleve->getEtudiants() as $elev)
        echo '<tr><td>',$elev['cNom'],'</td><td>',$elev['cPrenom'],'</td><td>',$elev['cMail'],'</td><td>',$elev['cNomRole'];
    ?>
  </tbody>
</table>
    

    

    

<?php include('../utiles/footer.php'); ?>