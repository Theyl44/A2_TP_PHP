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
            <a class="nav-link" href="suppetudiant.php?name=<?php echo $_GET['name']?>">Suppression d'un étudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="modif.php?name=<?php echo $_GET['name']?>">Modification d'une note</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Déconnexion</a>
        </li>
    </ul>
</nav>
<body>
<h1 class="h1" style="text-align: center;">MODIFICATION D'UN ETUDIANT</h1>
<form action="controleur.php?func=modifetudiant&name=<?php echo $_GET['name']?>" method="post">
    <div class="form-group col-md-4">
        <label for="id_etudiant_Amodif">ID de l'étudiant (actuel)</label>
        <select id="id_etudiant_Amodif" class="form-control" value="Choose" name="id_etudiant_Amodif">
            <?php
            $dsn = 'pgsql:dbname=modele_vue_controleur;host=127.0.0.1;port=5432';
            $user = 'postgres';
            $password = 'theo0811';
            try {
                $dbh = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }
            $reponse1 = $dbh->query('SELECT * FROM etudiant order by id');
            while ($data = $reponse1->fetch()) {
                echo "<option>".$data['id']."</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="id_etudiant_Fmodif">ID de l'étudiant (modif)</label>
        <input type="text" class="form-control" id="id_etudiant_Fmodif" name="id_etudiant_Fmodif">
    </div>
    <div class="form-group col-md-4">
        <label for="nom_modif">Nom</label>
        <input type="text" class="form-control" id="nom_modif" name="nom_modif">
    </div>

    <div class="form-group col-md-4">
        <label for="prenom_modif">Prenom</label>
        <input type="text" class="form-control" id="prenom_modif" name="prenom_modif">
    </div>
    <div class="form-group col-md-4">
        <label for="note_modif">Note</label>
        <input type="text" class="form-control" id="note_modif" name="note_modif">
    </div>
    <button type="submit" class="btn btn-primary">Modifier l'étudiant</button>
</form>
</body>
</html>