<!DOCTYPE HTML>
<html>
<head>
    <title> Enregistrer un utilisateur </title>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 50px;">
    <h2> Enregistrer un utilisateur </h2> <hr> <br>
    <form method='POST' action='controller.php?func=addUser'>
        <div class='form-group'>
            <label for='username'> Nom d'utilisateur </label>
            <input type='text' class='form-control' id='username' name='username' required>
        </div>
        <div class='form-group'>
            <label for='password'> Mot de passe </label>
            <input type='password' class='form-control' id='password' name='password' required>
        </div>
        <div class='form-group'>
            <label for='nom'> Nom </label>
            <input type='text' class='form-control' id='nom' name='nom' required>
        </div>
        <div class='form-group'>
            <label for='prenom'> Prénom </label>
            <input type='text' class='form-control' id='prenom' name='prenom' required>
        </div>
        <div class='form-group'>
            <label for='mail'> Mail </label>
            <input type='email' class='form-control' id='mail' name='mail' required>
        </div>
        <button type='submit' class='btn btn-dark'>Créer l'utilisateur</button>
    </form>
    </div>
</body>
</html>
