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
            <a class="nav-link" href="viewlogin.php">Connexion</a>
        </li>
    </ul>
</nav>

<body>
    <h1 class="h1" style="text-align: center;">INSCRIPTION</h1>
    <form action="controleur.php?func=update" method="post">
        <div class="form-group col-md-4">
            <label for="id_user">ID de l'utilisateur</label>
            <input type="text" class="form-control" id="id_user" name="id_user">
        </div>

        <div class="form-group col-md-4">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>

        <div class="form-group col-md-4">
            <label for="pwd">Password</label>
            <input type="text" class="form-control" id="pwd" name="pwd">
        </div>

        <div class="form-group col-md-4">
            <label for="mail">Mail</label>
            <input type="text" class="form-control" id="mail" name="mail">
        </div>

        <div class="form-group col-md-4">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>

        <div class="form-group col-md-4">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</body>
</html>