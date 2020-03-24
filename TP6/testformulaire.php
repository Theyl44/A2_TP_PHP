<?php
    include 'formulaire.php';

    $form = new formulaire("testformulaire.php","post");
    $form->ajouterzonetexte("Votre nom","nom");
    echo "<br>";
    $form->ajouterzonetexte("Votre code","code");
    echo "<br>";
    $form->ajouterbouton();
    $form->getform();

    if(isset($_POST['nom']) && isset($_POST['code'])) {
        echo "Votre nom : " . $_POST['nom'] . "<br>";
        echo "Votre code : " . $_POST['code'] . "<br>";
    }
?>