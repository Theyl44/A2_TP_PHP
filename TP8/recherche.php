<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> TP PHP </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="citation.php">Citation </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recherche.php">Recherche</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="modification.php">Modification</a>
            </li>
        </ul>
    </div>
</nav>
<h1 class="display" style="text-align: center;">RECHERCHE DE CITATION</h1>

<form method="post">
    <div class="form-group col-md-4">
        <label for="inputState">Autheur</label>
        <select id="auteur" class="form-control" value="Choose">
            <?php
            $dsn = 'pgsql:dbname=citations;host=127.0.0.1;port=5432';
            $user = 'postgres';
            $password = 'theo0811';

            try {
                $dbh = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }

            $reponse1 = $dbh->query('SELECT * FROM auteur');
            while ($data = $reponse1->fetch()) {
                echo "<option>".$data['nom']."</option>";
            }

            ?>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="inputState">Siècle</label>
        <select id="siecle" class="form-control" value="Choose">
            <?php
            $dsn = 'pgsql:dbname=citations;host=127.0.0.1;port=5432';
            $user = 'postgres';
            $password = 'theo0811';

            try {
                $dbh = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }

            $reponse1 = $dbh->query('SELECT * FROM siecle');
            while ($data = $reponse1->fetch()) {
                echo "<option>".$data['numero']."</option>";
            }

            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Rechercher</button>
</form>
    <?php

    ?>
</body>
</html>