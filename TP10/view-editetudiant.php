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
</nav>

<body>
    <h1 class="h1" style="text-align: center;">AJOUT D'ETUDIANTS</h1>
    <form action="controleur.php?func=ajout_etudiant&name=<?php echo $_GET['name']?>" method="post">
        <div class="form-group col-md-4">
            <label for="id_etudiant">ID de l'étudiant</label>
            <input type="text" class="form-control" id="id_etudiant" name="id_etudiant">
        </div>

        <div class="form-group col-md-4">
            <label for="nom_etudiant">Nom étudiant</label>
            <input type="text" class="form-control" id="nom_etudiant" name="nom_etudiant">
        </div>

        <div class="form-group col-md-4">
            <label for="prenom_etudiant">Prénom étudiant</label>
            <input type="text" class="form-control" id="prenom_etudiant" name="prenom_etudiant">
        </div>

        <div class="form-group col-md-4">
            <label for="note_etudiant">Note</label>
            <input type="text" class="form-control" id="note_etudiant" name="note_etudiant">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</body>
</html>