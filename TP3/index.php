<?php
    echo"<h1>Exo1</h1>";
    $var = 0 ;
    function increment(){
        static $x = 0 ;
        $x = $x + 1;
        echo"$x <br>";
        return $x;
    }
    increment();
    increment();
    increment();
    increment();
    echo"<hr>";
    echo"<h1>Exo2</h1>";
    $var = 1;
    echo"var = $var<br>";
    change($var);
    function change(&$x){
        if($x == 0){
            $x = 1;
            return 1;
        }
        else{
            $x = 0;
            return $x;
        }
    }
    echo"var = $var<br>";
    echo"<hr>";
    echo"<h1>Exo3</h1>";
    echo"<h2>qst2</h2>";
    $identite = ['alain', 'basile', 'David', 'Edgar'];
    $age = [1, 15, 35, 65];
    $mail = ['penom.nom@gtail.be', 'truc@bruce.zo', 'caro@caramel.org', 'trop@monmel.fr'];
    function tabmail($tab){
        $array[2][4] = array();
        for($i = 0 ; $i <= 3 ; $i++){
            $j = 0 ;
            while($tab[$i][$j] != '@'){
                $j++;
            }
            $j++;
            $domaine = "";
            while($tab[$i][$j] != "."){
                $domaine .= $tab[$i][$j];
                $j++;
            }
            $array[0][$i] = $domaine;
            $j++;

            $extention ="";
            for($j ; $j<strlen($tab[$i]) ; $j++){
                $extention .= $tab[$i][$j];
            }
//            echo"$extention<br>";
            $array[1][$i] = $extention;

        }
        return $array;
    }
    $newarray = tabmail($mail);
    $dom = $newarray[0];
    $ext = $newarray[1];
    for($i=0;$i<4;$i++){
        echo "domaine : $dom[$i] et extension : $ext[$i]<br>";
    }

    echo"<h2>qst3</h2>";

    function exo3q3($tab1, $tab2, $tab3){
        $nb = mt_rand(0,3);
        $age = $tab2[$nb];
        $nom = $tab1[$nb];
        $adresse = $tab3[$nb];
        $info = tabmail($tab3);
        $domaine = $info[0];
        $extension = $info[1];
        if($age == 1){
            echo"je me nomme $nom, j'ai $age an et mon mail est $adresse du domaine : $domaine[$nb] et mon extention est $extension[$nb] <br>";
        }else{
            echo"je me nomme $nom, j'ai $age ans et mon mail est $adresse du domaine : $domaine[$nb] et mon extention est $extension[$nb] <br>";

        }

    }
    exo3q3($identite, $age, $mail);

    echo"<hr>";
    echo"<h1>Exo4</h1>";

    function f1($nb){
        for($i = 0 ; $i < $nb ; $i++){
            echo"*";
        }
    }
    function f2($nb){
        for($i = 0 ; $i < $nb ; $i++){
            for($j = 0; $j < $nb ; $j++){
                echo"*";
            }
            echo"<br>";
        }
    }
    function f3($nb){
        for($i = 0 ; $i < $nb ; $i++){
            for($j = 0; $j <= $i ; $j++){
                echo"*";
            }
            echo"<br>";
        }
    }
    function f4($nb){
        f1($nb);
        echo ("<br>");
        for($j = 2; $j< $nb; $j++){
            for($i = 0; $i < 10; $i++){
                if($i==0 || $i==7){
                    echo("*");
                } else {
                    echo("&nbsp");
                }
            }
            echo ("<br>");
        }
        f1($nb);
    }
    function f5($nb){
        for($i = 0; $i< $nb; $i++){
            for($j = 0; $j <$nb; $j++){
                if($j==0 || $i==$j){
                    echo("*");
                } else {
                    echo("&nbsp&nbsp");
                }
            }
            echo ("<br>");
        }
        f1($nb);
    }
    function f6($nb){
        f1($nb);
        for($i = 0 ; $i< $nb ; $i++){
            for($j = $nb; $j > 0 ; $j--){
                if($j==$nb || $i==$j){
                    echo("*");
                } else {
                    echo("&nbsp&nbsp");
                }
            }
            echo ("<br>");
        }
        echo("*");
        echo ("<br>");
    }
    f1(5);
echo"<br>";
echo"<br>";
    f2(5);
echo"<br>";
echo"<br>";
    f3(5);
echo"<br>";
echo"<br>";
    f4(5);
echo"<br>";
echo"<br>";
    f5(5);
echo"<br>";
echo"<br>";
    f6(5);
echo"<br>";

    echo"<hr>";
    echo"<h1>Exo5</h1>";
    $msg ="ATTAQUEZ ASTERIX";
    echo"$msg";
    echo"<br>";
    cryptage($msg, 3);
    echo"$msg";
    echo"<br>";
    decryptage($msg,3);
    echo"$msg";
    echo"<br>";
    function cryptage(&$msg, $pas) {
        for ($i=0;$i<strlen($msg);$i++) {
            if(ord($msg[$i]) >= 65 && ord($msg[$i]) <= 90 || ord($msg[$i]) >= 97 && ord($msg[$i]) <= 122) {
                if (ord($msg[$i]) > 90 - $pas || ord($msg[$i]) > 122 - $pas) {
                    $msg[$i] = chr(ord($msg[$i]) + -26 + $pas);
                } else {
                    $msg[$i] = chr(ord($msg[$i]) + $pas);
                }
            }
        }
    }

    function decryptage(&$msg, $pas) {
        for ($i=0;$i<strlen($msg);$i++) {
            if(ord($msg[$i]) >= 65 && ord($msg[$i]) <= 90 || ord($msg[$i]) >= 97 && ord($msg[$i]) <= 122) {
                if (ord($msg[$i]) >= 65 + $pas || ord($msg[$i]) >= 97 + $pas) {
                    $msg[$i] = chr(ord($msg[$i]) - $pas);
                } else {
                    $msg[$i] = chr(ord($msg[$i]) +26 - $pas);
                }
            }
        }
    }
    echo"<hr>";
    echo"<h1>Exo6</h1>";
    $msg ="ATTAQUEZ ASTERIX";
    echo"$msg";
    echo"<br>";
    cryptageV($msg, 314);
    echo"$msg";
    echo"<br>";
    decryptageV($msg,314);
    echo"$msg";
    echo"<br>";
    function cryptageV(&$msg, $pas) {
        for ($i=0;$i<strlen($msg);$i++) {

        }
    }

    function decryptageV(&$msg, $pas){
        for ($i = 0; $i < strlen($msg); $i++) {

        }
    }
echo"<hr>";
    echo"<h1>Exo7</h1>";
$annuaire=array(
    "PUJOL Olivier"=>"03 89 72 84 48",
    "IMBERT Jo"=>"03 89 36 06 05",
    "SPIEGEL Pierre"=>"03 87 67 92 37",
    "THOUVENOT Frédéric"=>"01 42 86 02 12",
    "MEGEL Pierre"=>"09 59 71 46 96",
    "SUCHET Loïc"=>"03 89 33 10 54",
    "GIROIS Francis"=>"03 88 01 21 15",
    "HOFFMANN Emmanuel"=>"03 89 69 20 05",
    "KELLER Fabien"=>"04 18 52 34 25",
    "LEY Jean-Marie"=>"03 89 43 17 85",
    "ZOELLE Thomas"=>"04 18 65 67 69",
    "WILHELM Olivier"=>"03 89 60 48 78",
    "BLIN Nathalie"=>"01 28 59 23 25",
    "BICARD Pierre-Eric"=>"03 89 69 25 82",
    "ZIEGLER Thierry"=>"03 89 06 33 89",
    "BADER Jean"=>"03 89 25 65 72",
    "ROSSO Anne-Sophie"=>"01 56 20 02 36",
    "ROTTNER Thierry"=>"03 88 29 61 54",
    "WEBER Joao"=>"03 89 35 45 20",
    "SCHILLINGER Olivier"=>"03 84 21 38 40",
    "BICARD Muriel"=>"03 89 33 47 99 ",
    "KELLER Christian"=>"03 88 19 16 10 ",
    "GROELLY Antonio"=>"03 89 33 60 63",
    "ALLARD Aline"=>"03 89 56 49 19",
    "WINNINGER Bénédicte"=>"04 16 14 86 66");
ksort($annuaire);
echo"<table style='border-collapse: collapse; border: 1px solid black;'>";
foreach($annuaire as $key => $value){
    echo"<tr>";
    echo"<th>";
    echo"$key";
    echo"</th>";
    echo"<th>";
    echo"$value";
    echo"</th>";
    echo"</tr>";
}
    echo "</table>";
    echo"<br>";
    echo"<hr>";
    echo"<h1>Exo8</h1>";
    echo"<hr>";
    echo"<h1>Exo9</h1>";
$clients = ["1"=>"Dulong","ville 1"=>"Paris","age 1"=>"35",
    "2"=>"Leparc","ville 2"=>"Lyon","age 2"=>"47",
    "3"=>"Dubos","ville 3"=>"Tours","age 3"=>"58"];



    echo"<hr>";
    echo"<h1>Exo10</h1>";
    $chaine = "madam";
    palindrome($chaine);
    function palindrome($chaine){
        $chaine = strtoupper($chaine);
        if($chaine == strrev($chaine)){
            echo"$chaine est un palindrome de merde<br>";
        }else{
            echo"$chaine n'est pas un palindrome <br>";
        }
    }
    echo"<hr>";
    echo"<h1>Exo11</h1>";

    
?>
