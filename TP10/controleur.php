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

<?php
if($_GET['func'] == 'update') {
    update();
}
if($_GET['func'] == 'connect'){
    connect();
}
function connect(){
    if(isset($_POST['login2']) && isset($_POST['pwd2'])){
        $dsn = 'pgsql:dbname=modele_vue_controleur;host=127.0.0.1;port=5432';
        $user = 'postgres';
        $password = 'theo0811';
        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        $request = $dbh->prepare('SELECT * FROM utilisateur WHERE login = ?');
        $request->execute(array($_POST['login2']));
        $request = $request->fetch();
        $verif = password_verify($_POST['pwd2'] , $request['password']);
        if($verif){//bon mdp
            header("Location: viewadmin.php?name=".$_POST['login2']);
        }else{//mauvais mdp
            echo"<h1 style=\"text-align: center;\"><span class=\"material-icons\">highlight_off</span>MAUVAIS MDP</h1>";
        }

    }
}
function update(){
    if(isset($_POST['id_user']) && isset($_POST['login']) && isset($_POST['pwd']) && isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['prenom'])){
        $dsn = 'pgsql:dbname=modele_vue_controleur;host=127.0.0.1;port=5432';
        $user = 'postgres';
        $password = 'theo0811';
        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }

        $pass_hache = password_hash(htmlspecialchars($_POST['pwd']), PASSWORD_DEFAULT);
//        echo$_POST['id_user'];
//        echo$pass_hache;
    $reqAuteure = $dbh->prepare('INSERT INTO utilisateur(id, login, password, mail, nom, prenom) VALUES(:id, :login, :password, :mail, :nom, :prenom)');
    $reqAuteure->execute(array(
        'id'=>$_POST['id_user'],
        'login'=>$_POST['login'],
        'password'=>$pass_hache,
        'mail'=>$_POST['mail'],
        'nom'=>$_POST['nom'],
        'prenom'=>$_POST['prenom']
    ));
        $message='Votre Utilisateur a bien été ajouter';
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        header('Location: index.php');
    }
}