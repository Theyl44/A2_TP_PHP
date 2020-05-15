<?php
    $dsn = 'pgsql:dbname=graphnotes;host=127.0.0.1;port=5432';
    $user = 'postgres';
    $password = 'theo0811';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }


    header("Content-type: image/png");
    $image = imagecreate(1000, 500);
    $lightgray = imagecolorallocate($image, 128, 128,128);
    $nwar = imagecolorallocate($image, 0, 0, 0);
    $bleuclair = imagecolorallocate($image, 156, 227, 254);
    $blanc = imagecolorallocate($image, 255, 255, 255);

    $reponse1 = $dbh->prepare('SELECT * FROM notes where etudiant = ?');
    $reponse1->execute(array("E1"));
    $moyE1 = 0;
    $x0 = 0;
    $y0 = 200;
    $ori = 0;
    $l = 100;



    while ($data = $reponse1->fetch()) {
        $i++;
        $moyE1 += $data['note'];

        imageline($image, $x0+$ori, $y0-$data['note'], $x0+$ori +$l, $y0-$data['note'], $blanc);
//        imageline ($image , $y0 + $data['note'] ,  $x0 + $ori  ,  $x0 +$ori+ $l ,  y0 + $data['note'] ,  $blanc );
//        imageline ($image , $x0 + $ori ,  $y0 + $data['note'] ,  $x0 +$ori+ $l ,  y0 + $data['note'] ,  $bleuclair );
        $ori += 100;
    }
    $moyE1 = $moyE1 / $i;

    $reponse2 = $dbh->prepare('SELECT * FROM notes where etudiant = ?');
    $reponse2->execute(array("E2"));
    $moyE2 = 0 ;
    $i = 0;
    $ori = 0;
    while ($data = $reponse2->fetch()) {
        $i++;
        $moyE2 += $data['note'];
        imageline($image, $x0+$ori, $y0-$data['note'], $x0+$ori +$l, $y0-$data['note'], $bleuclair);
        $ori += 100;
    }
    $moyE2 = $moyE2 / $i;


    imagestring($image, 20, 350, 10, "Notes des etudiants E1 et E2 !", $nwar);
    imagestring($image, 20, 10, 200, "E1", $blanc);
    imagestring($image, 20, 60, 200, "E2", $bleuclair);
    imagestring($image, 20, 850, 450, "Moyenne E1 ".$moyE1, $nwar);
    imagestring($image, 20, 850, 475, "Moyenne E2 ".$moyE2, $nwar);


    imagepng($image);

?>