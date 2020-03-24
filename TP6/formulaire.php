<?php
class formulaire{
    function __construct($nom_fichier,$method)
    {
        echo "<form action= $nom_fichier method = $method>";
    }
    function ajouterzonetexte($text,$name){
        echo $text."<input type='text' name='$name'/>";
    }
    function ajouterbouton(){
        echo "<input type='submit' value='Envoyer'/>";
    }
    function getform(){
        echo "</form>";
    }
}
?>

