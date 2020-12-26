<?php

use App\Repositories\PersonneRepository;

include('../utiles/header.php');
require_once '../config/appConfig.php';
?>


    <body>
        <div class="d-flex align-items-center flex-column">
            <h1>Choisir un utilisateur :</h1>
            <br><br>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Mail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    $personne = New PersonneRepository();
                    foreach($personne->getAll() as $pers)
                        echo '<tr><td> <a href="#">',$pers->getCNom(),'</a></td><td>',$pers->getCPrenom(),'</td><td>',$pers->getCMail();
                    ?>
                </tbody>
            </table>
        </div>
<?php include('../utiles/footer.php'); ?>