<?php
    echo"hello world!\n";
    echo"<h2>Exo1</h2>";
    echo"EN : ";
    echo date('l j F Y', time());
    echo "<br>";
    $date = new DateTime();
    setlocale(LC_TIME, "fr_FR.UTF8");
    echo"FR : ";
    echo strftime( '%A %d %B %G', time());
    echo "<br>";
    echo"Date et heure : ";
    echo date('m/d/y H:i', time());


    echo "<br>";
    echo "<h2>Exo2</h2>";
//    $birthD = date('d-m-Y',mktime(0,0,0,8,2,2000));
//    echo "Date de naissance : ".$birthD."</br>";
//    echo "Date du jour : ".date('d/m/Y H:i')."</br>";
//    $age = date('Y') - date('Y',strtotime($birthD));
//    $mois = date('m') - date('m',strtotime($birthD));
//    $day = date('d') - date('d',strtotime($birthD));
//    if($day<0) {
//        $mois --;
//        $prev_mounth = date('j');
//        if($prev_mounth > 1) {
//            $prev_mounth--;
//        } else {
//            $prev_mounth = 12;
//        }
//        switch ($prev_mounth) {
//            case 1:
//            case 3:
//            case 5 :
//            case 7:
//            case 8:
//            case 10:
//            case 12:
//                $day = 31 + $day;
//                break;
//            case 4:
//            case 6:
//            case 9:
//            case 11:
//                $day = 30 + $day;
//                break;
//            case 2 :
//                $day = 29 + $day;
//                break;
//        }
//    }
//    $ttldays = $day + $mois*31 + $age*12*31;
//    echo "Age : ".$age." ans ".$mois." mois ".$day." jours = ".$ttldays." jours = ".($ttldays*3600)."s"."</br>";
    $datetime1 = new DateTime('2000-04-25');
    $datetime2 = new DateTime('2020-03-03');
    $interval = $datetime1->diff($datetime2);
    echo "date de naissance : ";
    echo $datetime1->format('Y-m-d');
    echo '<br>';
    echo "date actuelle : ";
    echo $datetime2->format('Y-m-d');
    echo '<br>';
    echo "il s'est écouler ";
    echo $interval->format('%R%a days');

        echo "<br>";
        echo "<h2>Exo3</h2>";
    //09 février 2020 à 08h34min35s
    echo"derniere pleine lune : ";
    $date1 = new DateTime("2020-02-09 08:34:35");
    echo $date1->format('Y-m-d H:i:s');
    echo "<br>";

    echo"prochaine pleine lune : ";
    $interval = new DateInterval('P29DT12H44M3S');
    $date1->add($interval);
    echo $date1->format('Y-m-d H:i:s');
    for($i = 0 ; $i<100 ; $i++){
        $date1->add($interval);
    }
    echo "<br>";
    echo"prochaine 100ieme pleine lune : ";
    echo $date1->format('Y-m-d H:i:s');

    echo "</br> <h3> Exercice 4 </h3> </br>";
    if (checkdate(02,29,1962)) {
        echo "La date existe </br>";
    } else {
        echo "La date n'existe pas </br>";
    }

    echo "</br> <h3> Exercice 5 </h3> </br>";
    $date = date('d-m-Y',mktime(0,0,0,3,3,1993));
    echo date('l',strtotime($date))."</br>";


    echo "</br> <h3> Exercice 6 </h3> </br>";
    $year = 2020;
    for ($year;$year<=2062;$year++) {
        if (checkdate(02,29,$year) == true) {
            echo $year."</br>";
        }
    }

    echo "</br> <h3> Exercice 7 </h3> </br>";
    $year = 2020;
    for ($year;$year<=2030;$year++) {
        $date = date('d-m-Y',mktime(0,0,0,5,1,$year));
        $day = date('w',strtotime($date));
        if($day == 1 || $day == 5) {
            echo $year." : WE prolongé </br>";
        } else {
            echo $year." : WE non prolongé </br>";
        }
    }


?>