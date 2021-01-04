<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

use App\Repositories\RoleRepository;
use App\Repositories\PersonneRepository;

$idPersonne = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // On filtre/nettoie la variable en GET
$Personne = new PersonneRepository;
$personneModif = $Personne->getById($idPersonne);
$idcurperso = $personneModif->getid();

//var_dump($idcurperso);

?>

<title>Modification d'un Utilisateur</title>

<h1 style="text-align: center;"> Modifier un utilisateur </h1>

<form action="saveMUtil.php" method="POST">

  <input type="hidden" name="idpersonne" value=" <?php echo $idcurperso; ?>">

    <!-- Nom de l'utilisateur -->
    <div class="form-group row">
      <label for="inputNom" class="col-sm-2 col-form-label">Nom :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nomutil" value="<?php echo $personneModif->getCNom(); ?>">
      </div>
    </div>

    <!-- Prenom de l'utilisateur -->
    <div class="form-group row">
      <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="prenomutil" value="<?php echo $personneModif->getCPrenom(); ?>">
      </div>
    </div>

    <!-- Adresse mail de l'utilisateur -->
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">Adresse mail :</label>
      <div class="col-sm-10">
      <input type="email" class="form-control" name="emailutil" value="<?php echo $personneModif->getCMail(); ?>">
      </div>
    </div>


    <!-- Rôle de l'utilisateur
    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Rôle :</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="roleutil" id="gridRadios1" value="admin">
          <label class="form-check-label" for="gridRadios1">
            Admin
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="roleutil" id="gridRadios2" value="etudiant">
          <label class="form-check-label" for="gridRadios2">
            Etudiant
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="roleutil" id="gridRadios2" value="enseignant">
          <label class="form-check-label" for="gridRadios2">
            Enseignant
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="roleutil" id="gridRadios2" value="tuteur">
          <label class="form-check-label" for="gridRadios2">
            Tuteur
          </label>
        </div>
    </div>
  </fieldset>
              -->
  <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Modifier un utilisateur</button>
    </div>



</form>


<?php include('../utiles/footer.php'); ?>