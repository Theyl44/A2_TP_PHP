<?php
    //INIT
    header("Content-type: image/png");
    $image = imagecreate(500,500);

    $couleur = imagecolorallocate($image, 140, 140, 140);
    imagestring($image, 5, 10, 10, 'Cours des actions Als et For en 2010', imagecolorallocate($image, 0, 255, 0));
    imagestring($image, 5, 30, 470, 'For', imagecolorallocate($image, 255, 0, 0));
    imagestring($image, 5, 150, 470, 'Als', imagecolorallocate($image, 255, 255, 255));

    $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=grapheactions;', 'postgres','theo0811');

    // ALS
    $als = $bdd->query('SELECT valeur FROM statistique WHERE action=\'Als\'');
    $i = 0;
    $x1 = 0;
    while ($noteset1 = $als->fetch()) {
        if ($i == 0) {
            $x1 = $noteset1['valeur'];
        } else {
            $x2 = $noteset1['valeur'];
            imageline($image, (45*($i-1)), (450-($x1*5)), (45*$i), (450-($x2*5)), imagecolorallocate($image, 255, 255, 255));
            $x1 = $x2;
        }
        $i++;
    }

    // FOR
    $als = $bdd->query('SELECT valeur FROM statistique WHERE action=\'For\'');
    $i = 0;
    $x1 = 0;
    while ($noteset1 = $als->fetch()) {
        if ($i == 0) {
            $x1 = $noteset1['valeur'];
        } else {
            $x2 = $noteset1['valeur'];
            imageline($image, (45*($i-1)), (450-($x1*5)), (45*$i), (450-($x2*5)), imagecolorallocate($image, 255, 0, 0));
            $x1 = $x2;
        }
        $i++;
    }

    // LOAD
    imagepng($image);
?>