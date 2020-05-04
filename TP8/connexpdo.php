<?php
    $dsn = 'pgsql:dbname=citations;host=127.0.0.1;port=5432';
    $user = 'postgres';
    $password = 'theo0811';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    echo"<h1>Autheur de la  BD</h1>";
    $reponse = $dbh->query('SELECT * FROM auteur');
    while ($data = $reponse->fetch()) {
        echo "<tr> <td style='border: 1px solid black '>".$data['prenom']." </td> <td style='border: 1px solid black'> ".$data['nom']." </td> </tr> <br>";
    }

    echo"<h1>Citation de la BD</h1>";
    $reponse = $dbh->query('SELECT * FROM citation');
    while ($data = $reponse->fetch()) {
        echo "<tr> <td style='border: 1px solid black '>".$data['phrase']." </td>  </tr> <br>";
    }

    echo"<h1>Siecle de la BD</h1>";
    $reponse = $dbh->query('SELECT * FROM siecle');
    while ($data = $reponse->fetch()) {
        echo "<tr> <td style='border: 1px solid black '>".$data['numero']." </td> </tr> <br>";
    }
?>