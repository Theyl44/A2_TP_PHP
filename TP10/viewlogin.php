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
    <h1 class="h1" style="text-align: center;">CONNEXION</h1>
    <form action="controleur.php?func=connect" method="post">
        <div class="form-group col-md-4">
            <label for="login2">Login</label>
            <input type="text" class="form-control" id="login2" name="login2">
        </div>

        <div class="form-group col-md-4">
            <label for="pwd2">Password</label>
            <input type="text" class="form-control" id="pwd2" name="pwd2">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</body>
</html>