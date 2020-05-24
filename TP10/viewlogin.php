<!DOCTYPE HTML>
<html>
<head>
    <title> Login </title>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 50px;">
<h2> Se connecter </h2> <hr> <br>
<form method='POST' action='controller.php?func=auth'>
    <div class='form-group'>
         <label for='username'> Nom de l'utilisateur </label>
         <input type='text' class='form-control' id='username' name='username' required>
    </div>
    <div class='form-group'>
          <label for='password'> Mot de passe </label>
          <input type='password' class='form-control' id='password' name='password' required>
    </div>
    <button type='submit' class='btn btn-dark'> Se connecter </button>
</form>
</div>
</body>
</html>
