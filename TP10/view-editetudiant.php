<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <title> Modifier un étudiant </title>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <h2> Modifier un étudiant </h2> <hr> <br>
    <?php
        $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=modele_vue_controleur;', 'postgres', 'theo0811');
        echo "<form method='POST' action='controller.php?func=modify'>
                  <div class='form-group'>
                    <label for='identity'> Etudiant </label>
                    <select class='form-control' id='identity' name='identity'>";
        $req = $bdd->prepare('SELECT * FROM etudiant WHERE user_id=?');
        $req->execute(array($_SESSION['id']));
        while($data = $req->fetch()) {
            print_r($data);
            echo "<option>".$data['nom']." ".$data['prenom']."</option>";
        }
        echo "
                  </select> </div>
                  <div class='form-group'>
                    <label for='prenom'> Prénom </label>
                    <input type='text' class='form-control' id='prenom' name='prenom' required>
                  </div>
                  <div class='form-group'>
                    <label for='nom'> Nom </label>
                    <input type='text' class='form-control' id='nom' name='nom' required>
                  </div>
                  <div class='form-group'>
                    <label for='note'> Note </label>
                    <input type='text' class='form-control' id='note' name='note' required>
                  </div>
                  <button type='submit' class='btn btn-dark'>Modifier</button>
              </form>
        ";
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>