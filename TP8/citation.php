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
<h1 class="display" >Citation du jour</h1>
<?php
    $dsn = 'pgsql:dbname=citations;host=127.0.0.1;port=5432';
    $user = 'postgres';
    $password = 'theo0811';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    $reponse1 = $dbh->query('SELECT count(*) as max FROM citation');
//    print_r($reponse->fetch());
    $max = $reponse1->fetch()['max'];
    echo "<p>Il y a ".$max;
    echo" citations répertoriées.</p>";
    echo"<p>Et voici l'une d'entre elles qui générée aleatoirement : </p>";

    $reponse2 = $dbh->prepare('SELECT * FROM citation WHERE id = ? ');//prepa de req en attendant le ? qui ecoute avec execute
    $idcit = array(rand(1,$max));
    $reponse2->execute($idcit);
    $reponse2 = $reponse2->fetch();
//    print_r($reponse2);
    echo "<strong>".$reponse2['phrase'];
    echo" </strong>";

    $reponse3 = $dbh->prepare('SELECT * FROM auteur WHERE id = ?');
    $reponse3->execute(array($reponse2['auteurid']));
    $reponse3 = $reponse3->fetch();
    echo"<p>".$reponse3['prenom']." ".$reponse3['nom']."</p>";

        $reponse4 = $dbh->prepare('SELECT * FROM siecle WHERE id = ? ');
        $reponse4->execute(array($reponse2['siecleid']));
        $reponse4 = $reponse4->fetch();
        echo"<p>(".$reponse4['numero']." siecle )</p>";


?>

</body>
</html>