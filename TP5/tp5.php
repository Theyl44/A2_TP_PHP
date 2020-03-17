
<?php
    session_start()
?>
    <h1>Exercice 1 </h1>
    <h2>part1</h2>
    <a href="tp5.php?valeur1=15">cliquer pour avoir la valeur en degré</a>
    <br>

<?php
    if(isset($_GET['valeur1'])) {
        $valF = $_GET['valeur1'];
        $valD = ($valF - 32) * 5 / 9;
        echo "La valeur en degré est $valD";
    }
?>
    <h2>part2</h2>
    <form method="post">
        Valeur en Fahra : <input type ="text" name="valeur2">

        <input type="submit" value="Convertir">
    </form>

<?php
if(isset($_POST['valeur2'])) {
    $valF2 = $_POST['valeur2'];
    $valD2 = ($valF2 - 32) * 5 / 9;
    echo "La valeur en degré est $valD2";
}
?>
    <h1>Exercice 2 </h1>
    <form method="post">
        Nom : <input type ="text" name="nom" value="<?php if(isset($_POST['nom'])){echo$_POST['nom'];} ?>">
        Prenom : <input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])){echo$_POST['prenom'];} ?>">
        <br>
        Débutant : <input type="radio" value="debutant" name="button" <?php if($_POST["button"]=="debutant") echo "checked";?>>
        Avancé :<input type="radio" value="avance" name="button" <?php if($_POST["button"]=="avance") echo "checked";?>>
        <br>
        <input type="reset" value="Effacer">
        <input type="submit" value="Envoyer">
        <br>
    </form>

<?php
    if(!isset($_POST['nom'])&&!isset($_POST['prenom'])&&!isset($_POST['button'])){

    }else{
        echo"Bonjour ".$_POST['prenom']." ".$_POST['nom']." ,Vous avez un niveau ". $_POST['button'];
        echo"<br>";
    }
?>
    <h1>Exercice 3   </h1>
    <form method="post">
        Nom : <input type ="text" name="nom" value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];}?>">
        Prenom : <input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];}?>">
        Age : <input type="text" name="age" value="<?php if(isset($_POST['age'])){echo $_POST['age'];}?>">
        <br>
            Langues partiqués (choisir 2 min)
        <br>
        <select name="langues[]" multiple="multiple">
            <option value="francais" <?php for($i = 0 ; $i < 4 ; $i++){if($_POST['langues'][$i] == "francais"){echo"selected";}}?>> français</option>
            <option value="anglais"<?php for($i = 0 ; $i < 4 ; $i++){if($_POST['langues'][$i] == "anglais"){echo"selected";}}?>> anglais</option>
            <option value="allemand"<?php for($i = 0 ; $i < 4 ; $i++){if($_POST['langues'][$i] == "allemand"){echo"selected";}}?>> allemand</option>
            <option value="espagnol"<?php for($i = 0 ; $i < 4 ; $i++){if($_POST['langues'][$i] == "espagnol"){echo"selected";}}?>> espagnol</option>
        </select>
        <br>
            Compétances informatiques (choisir 2 min)
        <br>
        HTML <input name="html" type="checkbox" <?php if(isset($_POST['html'])){echo "checked";}?>>
        CSS <input name="css" type="checkbox" <?php if(isset($_POST['css'])){echo "checked";}?>>
        PHP <input name="php" type="checkbox" <?php if(isset($_POST['php'])){echo "checked";}?>>
        SQL <input name="sql" type="checkbox" <?php if(isset($_POST['sql'])){echo "checked";}?>>
        C <input name="c" type="checkbox" <?php if(isset($_POST['c'])){echo "checked";}?>>
        C++ <input name="c++" type="checkbox" <?php if(isset($_POST['c++'])){echo "checked";}?>>
        JS <input name="js" type="checkbox" <?php if(isset($_POST['js'])){echo "checked";}?>>
        PYTHON <input name="python" type="checkbox" <?php if(isset($_POST['python'])){echo "checked";}?>>
        <br>
        <input type="reset" value="Effacer">
        <input type="submit" value="Envoyer">
        <br>
    </form>
    <?php
    if(!isset($_POST['nom'])&&!isset($_POST['prenom'])&&! isset($_POST['age']) && !isset($_POST['langues[]']) &&!isset($_POST['compeInfo'])){

    }else{
        echo"Vous etes : ".$_POST['prenom']." ".$_POST['nom'];
        echo "<br>";
        echo"Vous avez ". $_POST['age']."ans ";
        echo"<br>";
        echo"Vous parlez ";
        echo "<br>";
        if(isset($_POST['langues'][1])) {
            $langues=$_POST['langues'];
            foreach ($langues as $valeur) {
                echo " <li> $valeur </li>";
            }
        }else{
            echo "cocher 2 valeurs";
            echo"<br>";
        }
        echo "<br>";
        echo"Vous avez des compétences informatique en : ";
        echo "<br>";
        if(isset($_POST['css'])){
            echo " <li> CSS </li>";
        }
        if(isset($_POST['html'])){
            echo " <li> HTML </li>";
        }
        if(isset($_POST['php'])){
            echo " <li> PHP </li>";
        }
        if(isset($_POST['sql'])){
            echo " <li> SQL </li>";
        }
        if(isset($_POST['c'])){
            echo " <li> C </li>";
        }
        if(isset($_POST['c++'])){
            echo " <li> C++ </li>";
        }
        if(isset($_POST['js'])){
            echo " <li> JS </li>";
        }
        if(isset($_POST['python'])){
            echo " <li> PYHTON </li>";
        }
        echo "<br>";
    }
?>
    <br>
    <h1>Exercice 4</h1>
    <form method="post">
        Nombre 1 : <input type ="text" name="nombre1" value="<?php if(isset($_POST['nombre1'])){echo $_POST['nombre1'];}?>">
        <br>
        Nombre 2 : <input type ="text" name="nombre2" value="<?php if(isset($_POST['nombre2'])){echo $_POST['nombre2'];}?>">
        <br>
        Resultat : <input type ="text" name="nombre3" value="<?php
        if(isset($_POST['nombre1']) && isset($_POST['nombre2'])){
            $nombre1 = $_POST['nombre1'];
            $nombre2 = $_POST['nombre2'];
            switch($_POST['button3']){
                case "div":
                    if($nombre1 != 0) {
                        $nombre3 = $nombre2 / $nombre1;
                    }else{
                        echo"NaN";
                    }
                    break;
                case "diff":
                    $nombre3 = $nombre2 - $nombre1;
                    break;
                case "pow":
                    $nombre3 = pow($nombre2, $nombre1);
                    break;
                case "add" :
                    $nombre3 = $nombre2 + $nombre1;
                    break;
            }
            echo $nombre3;
        }
        ?>">
        <br>
        Clique sur un boutton !
        <button name="button3" value="add">+</button>
        <button name="button3" value="diff">-</button>
        <button name="button3" value="div">/</button>
        <button name="button3" value="pow">^</button>
        <br>
    </form>
    <br>
    <h1>Exercice 5</h1>
    <form action="" method="post" enctype="multipart/form-data">
        Fichier 1 <input type="file" name="fichier1">
        <br>
        Fichier 2 <input type="file" name="fichier2">
        <br>
        <input type="submit" value="envoi">
    </form>
<?php
    move_uploaded_file($_FILES["fichier1"]["tmp_name"], "/mnt/c/Users/Théo/Desktop/ISEN/2019-2020 CIR2/INFO/PHP/TP5/image1.jpg");
    move_uploaded_file($_FILES["fichier2"]["tmp_name"], "/mnt/c/Users/Théo/Desktop/ISEN/2019-2020 CIR2/INFO/PHP/TP5/image2.jpg");
?>
    <table>
        <thead>
            <tr>
                <td></td>
                <td>Fichier 1</td>
                <td>Fichier 2 </td>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>name</td>
            <td><?php echo $_FILES["fichier1"]["name"]?></td>
            <td><?php echo $_FILES["fichier2"]["name"]?></td>
        </tr>
        <tr>
            <td>type</td>
            <td><?php echo $_FILES["fichier1"]["type"]?></td>
            <td><?php echo $_FILES["fichier2"]["type"]?></td>
        </tr>
        <tr>
            <td>tmp_name</td>
            <td><?php echo $_FILES["fichier1"]["tmp_name"]?></td>
            <td><?php echo $_FILES["fichier2"]["tmp-name"]?></td>
        </tr>
        <tr>
            <td>error</td>
            <td><?php echo $_FILES["fichier1"]["error"]?></td>
            <td><?php echo $_FILES["fichier2"]["error"]?></td>
        </tr>
        <tr>
            <td>size</td>
            <td><?php echo $_FILES["fichier1"]["size"]?></td>
            <td><?php echo $_FILES["fichier2"]["size"]?></td>
        </tr>
        <tr>
            <td>image</td>
            <td><img src="image1.jpg"></td>
            <td><img src="image2.jpg"></td>
        </tr>
        </tbody>
    </table>

    <br>
    <h1>Exercice 7</h1>
<?php

    setcookie("cookie0", "test0");
    setcookie("cookie1", "test1", strtotime("+1 week"));//une semaine en sec = 604800

    echo $_COOKIE['cookie0'];
    echo "<br>";
    echo $_COOKIE['cookie1'];
    echo "<br>";
    print_r($_COOKIE);
    echo "<br>";
    echo" supprimer les cookies";
    echo"<br>";
    setcookie("cookie0");
    setcookie("cookie1");
    echo $_COOKIE['cookie0'];
    echo "<br>";
    echo $_COOKIE['cookie1'];
    echo "<br>";
    print_r($_COOKIE);
?>
    <br>
    <h1>Exercice 8</h1>
    <?php
    $array = array(
        "cookieA"=> "testA",
        "cookieB"=> "testB",
        "cookieC"=> "testC",
    );
    foreach ($array as $key => $value) {
        setcookie($key, $value);
        echo $_COOKIE[$key];
        echo"<br>";
    }
    ?>
    <br>
    <h1>Exercice 9</h1>
<?php
    echo session_id();
    echo"<br>";
    $_SESSION['usr'] = array( "nom"=>"Théo LOPEZ", "date"=>date("F j, Y, g:i a"), "lien"=>"https://www.google.com/webhp?hl=fr&sa=X&ved=0ahUKEwjW_MrViI3oAhV0DGMBHTzfDgoQPAgH")
?>
    <a href="page.php">cliquer sur le lien</a>
    <br>
    <h1>Exercice 10</h1>

<?php
    $id_file=fopen("test-fic.txt", "r");
    if ($id_file) {
        $nb_ligne=0;
        while ($ligne=fgets($id_file)){
            $nb_ligne++;
            echo $ligne.'<br>';
        }
        fclose($id_file);
    }
    echo"<br>";
    echo"--------------------------------------------";
    echo"<br>";
    $id_file=fopen("test-fic.txt", "a+");
    fwrite($id_file, " Théo LOPEZ");
    fclose($id_file);

    $id_file=fopen("test-fic.txt", "r");
    if ($id_file) {
        $nb_ligne=0;
        while ($ligne=fgets($id_file)){
            $nb_ligne++;
            echo $ligne.'<br>';
        }
        fclose($id_file);
    }
?>
    <br>
    <h1>Exercice 11</h1>
<?php
    $id_file=fopen("contact.txt", "r");
    if ($id_file) {
        $nb_ligne=0;
        while ($ligne=fgets($id_file)){
            $nb_ligne++;
            echo $ligne.'<br>';
        }
        fclose($id_file);
    }
    echo"--------------------------------------------";
    echo"<br>";
?>
    <table>
        <tbody>
            <?php
            $id_file=fopen("contact.txt", "r");
            if ($id_file) {
                $nb_ligne=0;
                while ($ligne=fgets($id_file)){
                    $ligne = "<tr><td>".str_replace(";" , "</td><td>", $ligne);
                    $nb_ligne++;
                    echo $ligne.'</tr>';

                }
                fclose($id_file);
            }
            ?>
        </tbody>
    </table>

    <br>
    <h1>Exercice 12</h1>
<form method="post">
    Enregistrez vos informations personnelles :
    <br>
    Votre Nom : <input type ="text" name="first-name">
    <br>
    Votre Prenom : <input type="text" name="second-name">
    <br>
    <input type="reset" value="Effacer">
    <input type="submit" value="Enregistrer">
    <br>
</form>
<?php
    if(isset($_POST['first-name']) && isset($_POST['second-name'])){
        $connection = fopen('connection.txt', 'a+');
        if ($connection){
            if(isset($_SESSION['id'])){
                $_SESSION['id'] = $_SESSION['id'] + 1;
            }else{
                fwrite($connection, "Numéro;nom;prénom;date \n");
                $_SESSION['id']= 1 ;
            }

            $numero = $_SESSION['id'];
            echo"<h4>Merci pour votre visite ".$_POST['first-name']." ".$_POST['second-name']."</h4>";
            echo"<br>";

          $char = $numero.";".$_POST['second-name'].";".$_POST['first-name'].";".date("F j, Y, g:i a");
            fwrite($connection, $char."\n");
            fclose($id_file);
        }
    }
?>
    <table>
        <tbody>
        <?php
        $id_file=fopen("connection.txt", "r");
        if ($id_file) {
            $nb_ligne=0;
            while ($ligne=fgets($id_file)){
                $ligne = "<tr><td>".str_replace(";" , "</td><td>", $ligne);
                $nb_ligne++;
                echo $ligne.'</tr>';

            }
            fclose($id_file);
        }
        ?>
        </tbody>
    </table>

    <br>
    <h1>Exercice 13</h1>
    <form method="post">
        Choisir votre délégué :
        <br>
        Etudiant 1 :<input type="radio" name="bouton" value="1" <?php if(isset($_POST['bouton'])){if($_POST['bouton']==1){echo"checked";}}?>>
        <br>
        Etudiant 2 : <input type="radio" name="bouton" value="2"<?php if(isset($_POST['bouton'])){if($_POST['bouton']==2){echo"checked";}}?>>
        <br>
        Etudiant 3 : <input type="radio" name="bouton" value="3" <?php if(isset($_POST['bouton'])){if($_POST['bouton']==3){echo"checked";}}?>>
        <br>
        <input type="reset" value="Effacer">
        <input type="submit" value="Enregistrer">
        <br>
    </form>
<?php
    $delegue = fopen("delegue.txt","a+");
    if($delegue) {
        if (isset($_POST['bouton'])) {
            switch ($_POST['bouton']) {
                case 1:
                    fwrite($delegue, "1\n");
                    break;
                case 2:
                    fwrite($delegue, "2\n");
                    break;
                case 3:
                    fwrite($delegue, "3\n");
                    break;
            }
        }
    }
    $n1 = 0;
    $n2 = 0;
    $n3 = 0;
    $n = 0;
    $id_file=fopen("delegue.txt", "r");
    if ($id_file) {
        $nb_ligne=0;
        while ($ligne=fgets($id_file)){
            switch($ligne){
                case 1:
                    $n1++;
                    $n++;
                    break;
                case 2:
                    $n2++;
                    $n++;
                    break;
                case 3:
                    $n3++;
                    $n++;
                    break;
            }

        }
        fclose($id_file);
    }
    echo"Resultat du vote VOTE :";
    echo"<br>";
    $val = $n1 / $n *100;
    echo"L'élève 1 à $n1 voix soit $val%";
    echo"<br>";
    $val = $n2 / $n *100;
    echo"L'élève 2 à $n2 voix soit $val%";
    echo"<br>";
    $val = $n3 / $n *100;
    echo"L'élève 3 à $n3 voix soit $val%";
    echo"<br>";
    if($n1 > $n2 && $n1 > $n3){
        echo"===Le nouveaux délégué de la classe est L'Etudiant 1===";
        echo"<br>";
    }
    if($n2 > $n1 && $n2 > $n3){
        echo"===Le nouveaux délégué de la classe est L'Etudiant 1===";
        echo"<br>";
    }
    if($n3 > $n2 && $n3 > $n1){
        echo"===Le nouveaux délégué de la classe est L'Etudiant 1===";
        echo"<br>";
    }
?>
    <br>
    <h1>Exercice 14</h1>

    <form method="post">
        Veuillez rentrer les informations suivantes :
        <br>
        Votre Nom : <input type ="text" name="first">
        <br>
        Votre Prenom : <input type ="text" name="second">
        <br>
        Votre Note : <input type ="text" name="grade">
        <br>
        <input type="submit" value="Afficher" name="print">
        <input type="submit" value="Enregistrer" name="submit">
    </form>
<?php

session_start();
    if(isset($_SESSION['table'])){
        if(isset($_POST['submit'])) {
            array_push($_SESSION['table'], $_POST['first']);
            array_push($_SESSION['table'], $_POST['second']);
            array_push($_SESSION['table'], $_POST['grade']);
        }
    }else{
        $_SESSION['table'] = array();
    }
    if(isset($_POST['print'])) {
//        echo "<table>
//                <thead>
//                    <tr>
//                        <td>Nom</td>
//                        <td>Prenom</td>
//                        <td>Note</td>
//                    </tr>
//                </thead>
//                <tbody>";
//        echo "<tr>";
//        for ($_SESSION['table']){
//
//        }
//        echo "</tr>";
//        echo "</tbody></table>";
    }
?>