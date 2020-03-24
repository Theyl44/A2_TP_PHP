<?php
class Formulaire{

    public function __construct($nom_fichier, $methode ){
        echo"<form action=$nom_fichier method= $methode >\n";
    }
    public function ajouterzonetexte($text, $name){
        echo"$text : <input type='text' name = $name/>\n";
    }
    public function ajouterbouton(){
        echo"<input type='submit' value='send' />\n";
    }
    public function getform(){
        echo"</form>\n";
    }
}

?>