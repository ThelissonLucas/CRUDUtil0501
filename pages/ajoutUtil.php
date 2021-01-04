<?php
require_once '../config/appConfig.php';
include('../utiles/header.php');

?>
<title>Ajout d'un Utilisateur</title>

<h1 style="text-align: center;"> Ajouter un utilisateur </h1>

<form action="saveUtil.php" method="POST">

    <!-- Nom de l'utilisateur -->
    <div class="form-group row">
      <label for="inputNom" class="col-sm-2 col-form-label">Nom :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nomutil" placeholder="Ecrivez le nom de l'utilisateur">
      </div>
    </div>

    <!-- Prenom de l'utilisateur -->
    <div class="form-group row">
      <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="prenomutil" placeholder="Ecrivez le prénom de l'utilisateur">
      </div>
    </div>

    <!-- Adresse mail de l'utilisateur -->
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">Adresse mail :</label>
      <div class="col-sm-10">
      <input type="email" class="form-control" name="emailutil" placeholder="Ecrivez l'email de l'utilisateur">
      </div>
    </div>

    <!-- Mot de passe de l'utilisateur -->
    <div class="form-group row">
      <label for="inputMdp" class="col-sm-2 col-form-label">Mot de passe :</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="mdputil" placeholder="Ecrivez le mot de passe de l'utilisateur">
      </div>
    </div>

    <!-- Rôle de l'utilisateur -->
    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Rôle :</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radioadmin" id="gridRadios1" >
          <label class="form-check-label" for="gridRadios1">
            Admin
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radioetudiant" id="gridRadios2">
          <label class="form-check-label" for="gridRadios2">
            Etudiant
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radioenseignant" id="gridRadios2" >
          <label class="form-check-label" for="gridRadios2">
            Enseignant
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radiotuteur" id="gridRadios2" >
          <label class="form-check-label" for="gridRadios2">
            Tuteur
          </label>
        </div>
    </div>
  </fieldset>

  <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Créer un utilisateur</button>
    </div>



</form>



<?php include('../utiles/footer.php'); ?>