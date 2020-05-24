<?php session_start();
    if (isset($_SESSION['id']) == false) {
        header('Location: ./viewlogin.php');
    }
?>

<!DOCTYPE HTML>
<html>
<head>
    <title> Admin </title>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <h2> Page administrateur - <?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?> </h2> <hr> <br>
        <?php
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=etudiants;', 'postgres', 'Isen2019');
            $request = $bdd->prepare('SELECT * FROM etudiant WHERE user_id=?');
            $request->execute(array($_SESSION['id']));
            echo "<table class='table'> <thead> <td> <b> Nom </b> </td> <td> <b> Prénom </b> </td> <td> <b> Note </b> </td> <td> <b> Supprimer </b></td></thead>";
            while ($data = $request->fetch()) {
                echo "<tr> <td>".$data['nom']."</td> <td>".$data['prenom']."</td> <td>".$data['note']." </td> <td> <a href='controller.php?func=destroy&id=".$data['id']."'> <button class=\"btn btn-dark\"> Supprimer </button> </a></td></tr>";
            }
            echo "</table> <br>";
        ?>
    <a href='view-newetudiant.php'> <button class="btn btn-dark"> Ajouter un étudiant </button> </a>
    <a href='view-editetudiant.php'> <button class="btn btn-dark"> Modifier un étudiant </button> </a> <br> <br>
    <h5> <b> Note moyenne :
        <?php
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=etudiants;', 'postgres', 'Isen2019');
            $request = $bdd->prepare('SELECT AVG(note) FROM etudiant WHERE user_id=?');
            $request->execute(array($_SESSION['id']));
            echo $request->fetch()['avg'];
        ?>
    </b> </h5> <br>
    <a href='controller.php?func=close'> <button class="btn btn-dark"> Se déconnecter </button> </a>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>