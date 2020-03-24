<?php
    include 'formulaire.php';
    $form = new Formulaire("testformulaire.php","post");
    $form->ajouterzonetexte("Votre Nom","name");
    echo"<br>";
    $form->ajouterzonetexte("Votre Code", "code");
    echo"<br>";
    $form->ajouterbouton();
    $form->getform();
    if(isset($_POST['nom']) || isset($POST['code'])){
        echo"Votre nom : ".$_POST['nom']."<br>";
        echo"Votre code : ".$_POST['code']."<br>";
    }


?>
