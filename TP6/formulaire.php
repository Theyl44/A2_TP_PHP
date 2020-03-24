<?php
    class formulaire{

        function __construct($nomFichier, $methode) {
            echo "<form method=$nomFichier action=$methode>";
        }
        function ajouterZoneText($text, $name){
            echo $text."<input type= 'text' name=$name />";
        }
        function ajouterBouton(){
            echo "<input type = 'submit' value='Envoyer'/>";
        }
        function getForm(){
            echo "</form>";
        }
    }
?>