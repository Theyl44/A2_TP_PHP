<?php
    echo"<h1>Operateurs , Tableaux et Structures de controle </h1>";
    echo"<h2>Exo 1 </h2>";
    echo"<h3>avec un elseif</h3>";
    $age = mt_rand(0,100);
    if($age <= 12 && $age >= 0){
        echo"enfant<br>";
    }elseif($age <= 19 && $age >=13){
        echo"ado<br>";
    }elseif ($age <= 50 && $age >= 20){
        echo"adulte<br>";
    }
    elseif ($age <= 70 && $age >= 50){
        echo"sénior<br>";
    }
    elseif ($age >= 70){
        echo"agé<br>";
    }

    echo"<h3>avec un switch</h3>";
    switch ($age){
        case ($age <= 12 && $age >= 0) :
            echo"enfant<br>";
            break;
        case($age <= 19 && $age >=13):
            echo"ado<br>";
            break;
        case($age <= 50 && $age >=20):
            echo"adulte<br>";
            break;
        case($age <= 70 && $age >=50):
            echo"senior<br>";
            break;
        case($age >=70):
            echo"agé<br>";
            break;
    }
    echo"votre age est $age<br>";
    echo"<hr>";
    echo"<h2>Exo 2 </h2>";
    echo"<h3>Qst1 reprendre pas bonne val </h3>";
    $i = 0;
    $n0 = 0;
    $n1 = 1;
    $n2 = $n1 + $n0;
    echo"$n0,$n1,$n2,";
    while($i <= 20){
        $n0 = $n1;
        $n1 = $n2;
        $n2 = $n1 + $n0;
        echo"$n2,";
        $i++;
    }
    echo"<h3>Qst2</h3>";
    echo"<br>";
    $j = 0 ;
    $m0 = 0;
    $m1 = 1;
    $m2 = $m1 + $m0;
    do{
        $quotien = $m2/$m1;
        $m0 = $m1;
        $m1 = $m2;
        $m2 = $m1 + $m0;
        echo"$quotien,";
        $j++;
    }
    while($j <= 30);

    echo"<hr>";
    echo"<h2>Exo 3 </h2>";
    echo"<h3>Qst1</h3>";

    $somme = 0 ;
    $vmax = 1500;
    echo"La POUR UN NBR DE REP  = $vmax<br>";
    for($i = 1 ; $i<=$vmax ; $i++){
        $somme = $somme + 1/($i**2);
    }
    echo"pi^2/6 = $somme<br>";
    $somme = $somme*6;
    $somme = $somme**0.5;

    echo"pi = $somme";
    echo"<hr>";
    echo"<h2>Exo 4 </h2>";
    $tab = array(
        "Coluche" => "Je suis capable du meilleur et du pire, dans le pire, c'est moi le meilleur.",
        "Laurine" => "Qui pisse contre le vent, se rince les dents",
        "Rochefort" => "Si haut qu'on monte, on finit toujours pas des cendres",
        "Diderot" => "Etre neutre, c'est profiter des embarras des autres pour arranger ses affaires"
    );
    foreach ($tab as $key => $value){
        echo"-$key : \"$value\"<br>";
    }
    echo"<hr>";
    echo"<h2>Exo 5 </h2>";
    $nbr = mt_rand();
    $prod = 1;
    echo"La table de $nbr<br>";
    for($i = 0 ; $i <=10 ; $i++){
        $prod = $i*$nbr;
        echo"$i * $nbr = $prod <br>";
    }
    echo"<hr>";
    echo"<h2>Exo 6 </h2>";
    $n = 97;
    echo "Les nombres premiers entre 0 et ".$n." sont : ";
    $negatif = false;

    for($i=2;$i<=$n;$i++){
        $nbDiv = 0;//Et on compte le nombre de diviseur
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
                $nbDiv++;
            }
        }
        if($nbDiv == 2){
            if($negatif){
                echo "-";
            }
            echo $i.", ";
        }
    }
    echo"<hr>";
    echo"<h2>Exo 7 </h2>";
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
        echo"<h2>Exo 8 </h2>";
        echo"<hr>";
        echo"<h2>Exo 9 </h2>";
            $msgc ="CIR-NANTES";
            $msgc = strtoupper($msgc);
            echo"$msgc = ";
            for($i = 0 ; $i< strlen($msgc) ; $i++){
                $msgc[$i] = chr(ord($msgc[$i])+1);
            }
            echo"$msgc";
    echo"<hr>";
    echo"<h2>Exo 10</h2>";
$size = "400T";
    echo "$size = ";
    switch ($size[strlen($size)-1]) {
        case "K":
            $size = substr($size,0,strlen($size)-1);
            echo "$size x 1024";
            break;
        case "M":
            $size = substr($size,0,strlen($size)-1);
            echo "$size x 1024 x 1024";
            break;
        case "G":
            $size = substr($size,0,strlen($size)-1);
            echo "$size x 1024 x 1024 x 1024";
            break;
        case "T":
            $size = substr($size,0,strlen($size)-1);
            echo "$size x 1024 x 1024 x 1024 x 1024";
            break;
    }

?>