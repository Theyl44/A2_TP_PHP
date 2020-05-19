<?php
switch ($_GET['func']){
    case 'update' :
        update();
        break;
    case 'connect':
        connect();
        break;
    case 'ajout_etudiant':
        ajout_etudiant();
        break;
    case 'supprimeretudiant':
        supprimeretudiant();
        break;
    case 'modifetudiant':
        modifetudiant();
        break;

}
function modifetudiant(){

    if(isset($_POST['id_etudiant_Amodif']) && isset($_POST['id_etudiant_Fmodif']) && isset($_POST['nom_modif']) && isset($_POST['prenom_modif']) && isset($_POST['note_modif'])){
        $dsn = 'pgsql:dbname=modele_vue_controleur;host=127.0.0.1;port=5432';
        $user = 'postgres';
        $password = 'theo0811';
        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        $requeteSupprCitation = $dbh->prepare('UPDATE etudiant SET id = ? , nom = ?, prenom = ?, note = ?  WHERE user_id = ?;');
        $requeteSupprCitation->execute(array(
            $_POST['id_etudiant_Fmodif'],
            $_POST['nom_modif'],
            $_POST['prenom_modif'],
            $_POST['note_modif'],
            $_POST['id_etudiant_Amodif']
        ));
        header('Location: viewadmin.php?name='.$_GET['name']);
    }
}
function supprimeretudiant(){
    if(isset($_POST['id_etudiant_supp'])){
        $dsn = 'pgsql:dbname=modele_vue_controleur;host=127.0.0.1;port=5432';
        $user = 'postgres';
        $password = 'theo0811';
        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        $requeteSupprCitation = $dbh->prepare('delete from etudiant where id=:id');
        $requeteSupprCitation->execute(array(
            'id'=>$_POST['id_etudiant_supp']
        ));
        header('Location: viewadmin.php?name='.$_GET['name']);
    }
}
function ajout_etudiant(){
    if(isset($_GET['name']) && isset($_POST['id_etudiant']) && isset($_POST['nom_etudiant']) && isset($_POST['prenom_etudiant']) && isset($_POST['note_etudiant'])){
        $dsn = 'pgsql:dbname=modele_vue_controleur;host=127.0.0.1;port=5432';
        $user = 'postgres';
        $password = 'theo0811';
        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        $aux = $dbh->prepare('SELECT * FROM utilisateur where login = ? ');
        $aux->execute(array($_GET['name']));
        $aux = $aux->fetch();
//        echo $aux['id'];
//        echo $aux['login'];
        $ques = $dbh->prepare('INSERT INTO etudiant(id, user_id, nom , prenom, note) VALUES(:id, :user_id, :nom, :prenom, :note)');
        $ques->execute(array(
            'id'=>$_POST['id_etudiant'],
            'user_id'=>$aux['id'],
            'nom'=>$_POST['nom_etudiant'],
            'prenom'=>$_POST['prenom_etudiant'],
            'note'=>$_POST['note_etudiant']
        ));

        echo '<script type="text/javascript">window.alert("\'Votre Etudiant a bien été ajouter\'");</script>';
        header('Location: viewadmin.php?name='.$_GET['name']);
    }
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
            echo"<h1 style=\"text-align: center;\">ERREUR DE LOGIN OU DE MDP</h1>";
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