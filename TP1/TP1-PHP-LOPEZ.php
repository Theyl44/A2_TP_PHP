<h1>TP1</h1>
<hr>
<h2>Exercice1</h2>

<?php
ini_set("display_errors", "on");

echo "1 - le livre \"ma vie\" est terrible !! <br>";
echo "2 - le livre \"ma vie\" est terrible !! <br>";
echo '3 - le livre "ma vie" est terrible !! <br>';
echo "4 - le livre \"ma vie\" est terrible !! et le public l'apprécie<br><br>";
    $mavie = "\"ma vie\"";
echo "5 - le livre $mavie est terrible !! <br>";
echo "6 - le livre $mavie est terrible !! <br>";

?>
<hr>
<h2>Exercice2</h2>
<?php

echo "<i>J'ai l'esprit large et je n'admets pas qu'on dise le contraire<i>"." <b>Citation de Coluche</b>";

?>

<hr>
<h2>Exercice3</h2>

<?php
$citation ="J'ai l'esprit large et je n'admets pas qu'on dise le contraire";
$auteur = "Coluche";
    if(isset($auteur)){
        echo"true";
    }
    else{
        echo"false";
    }
    if(isset($citation)){
        echo"true";
    }
    else{
        echo"false";
    }

    unset($auteur);
    unset($citation);

    if(isset($auteur)){
        echo"true";
    }
    else{
        echo"false";
    }
    if(isset($citation)){
        echo"true";
    }
    else{
        echo"false";
    }

?>
<hr>
<h2>Exercice4</h2>
<?php
    echo $_SERVER;
    echo $GLOBALS;
?>
<hr>
<h2>Exercice5</h2>
<?php



    if(ini_get("display_errors") == "on"){
        echo "true";
    }else{
        echo "false";
    }
    ini_set("upload_max_filesize", "2M");
    phpinfo();
    //taper la commande ctrl+F avec
?>