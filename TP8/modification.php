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
<h1 class="display">AJOUT</h1>
<form method="post">
    <div class="form-group col-md-4">
        <label for="id_auteur">ID de l'auteur</label>
        <input type="text" class="form-control" id="id_auteur" name="id_auteur">
    </div>

    <div class="form-group col-md-4">
        <label for="nom_auteur">Nom de l'auteur</label>
        <input type="text" class="form-control" id="nom_auteur" name="nom_auteur">
    </div>

    <div class="form-group col-md-4">
        <label for="id_auteur">Prénom de l'auteur</label>
        <input type="text" class="form-control" id="prenom_auteur" name="prenom_auteur">
    </div>

    <div class="form-group col-md-4">
        <label for="id_siecle">ID du siècle</label>
        <input type="text" class="form-control" id="id_siecle" name="id_siecle">
    </div>

    <div class="form-group col-md-4">
        <label for="num_siecle">Siècle</label>
        <input type="text" class="form-control" id="num_siecle" name="num_siecle">
    </div>

    <div class="form-group col-md-4">
        <label for="citation">Citation</label>
        <input type="text" class="form-control" id="citation" name="citation">
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<br>
<h1>Suppression</h1>
<br>
<form method="post">
    <div class="form-group col-md-4">
        <select  name="suppr" id="id_suppr" class="custom-select custom-select-pm">
            <option selected>Selectionner l'ID d'une citation</option>
            <?php

            $dsn = 'pgsql:dbname=citations;host=127.0.0.1;port=5432';
            $user = 'postgres';
            $password = 'theo0811';

            try {
                $dbh = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }

            $requeteIdCitation = $dbh->query("select id from citation;");

            while($idCitation = $requeteIdCitation->fetch()){
                echo "<option value='".$idCitation['id']."'>".$idCitation['id']."</option>";
            }
            $requeteIdCitation->closeCursor();
            ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Supprimer</   button>
</form>

<?php

if(isset($_POST['id_auteur']) && isset($_POST['nom_auteur']) &&isset($_POST['prenom_auteur']) && isset($_POST['id_siecle']) && isset($_POST['num_siecle']) &&isset($_POST['citation'])){
    $idCitations = $_POST['id_siecle'] + $_POST['id_auteur'];
    $sielce = $_POST['id_siecle'];
    $ateruet = $_POST['id_auteur'];
    $phrase =$_POST['citation'];


    $reqAuteure = $dbh->prepare('INSERT INTO auteur(id, nom, prenom) VALUES(:id, :nom, :prenom)');
    $reqAuteure->execute(array(
        'id'=>$_POST['id_auteur'],
        'nom'=>$_POST['nom_auteur'],
        'prenom'=>$_POST['prenom_auteur']));


    $reqSiecles = $dbh->prepare('INSERT INTO siecle(id, numero) VALUES(:id, :num)');
    $reqSiecles->execute(array(
        'id'=>$_POST['id_siecle'],
        'num'=>$_POST['num_siecle']));

    $reqCitations = $dbh->prepare('INSERT INTO citation(id, phrase, auteurid, siecleid) VALUES(:id, :phrase, :idAuteur, :idSiecle)');
    $reqCitations->execute(array(
        'id'=>($_POST['id_siecle'] + $_POST['id_auteur']),
        'phrase'=>$_POST['citation'],
        'idAuteur'=>$_POST['id_auteur'],
        'idSiecle'=>$_POST['id_siecle']));


}

if(isset($_POST['suppr'])){
    $requeteSupprCitation = $dbh->prepare('delete from citation where id=:id');
    $requeteSupprCitation->execute(array(
        'id'=>$_POST['suppr']));
}
?>
</body>
</html>