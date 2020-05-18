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
            <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewnewuser.php">Inscription</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view-editetudiant.php">Ajout d'un étudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view-editetudiant.php">Suppression d'un étudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view-editetudiant.php">Modification d'un étudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Déconnexion</a>
        </li>
    </ul>
</nav>

<body>
    <h1 class="h1" style="text-align: center;">Bienvenue M ou Mme :  <?php echo $_GET['name']?></h1>
</body>
</html>