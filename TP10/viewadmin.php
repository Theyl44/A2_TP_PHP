<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Site</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href='viewadmin.php?name=<?php echo $_GET['name']?>'>Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewnewuser.php">Inscription</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view-editetudiant.php?name=<?php echo $_GET['name']?>">Ajout d'un étudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view-editetudiant.php?name=<?php echo $_GET['name']?>">Suppression d'un étudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view-editetudiant.php?name=<?php echo $_GET['name']?>">Modification d'une note</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Déconnexion</a>
        </li>
    </ul>
</nav

<body>

    <h1 class="h1" style="text-align: center;">Bienvenue M ou Mme :  <?php echo $_GET['name']?></h1>

    <?php
        $dsn = 'pgsql:dbname=modele_vue_controleur;host=127.0.0.1;port=5432';
        $user = 'postgres';
        $password = 'theo0811';
        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        $ques = $dbh->query('SELECT * FROM etudiant');
        $ques = $ques->fetch();
        print_r($ques);
    ?>
</body>
</html>