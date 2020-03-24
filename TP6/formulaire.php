<?php
class Formulaire{

    public function __construct($nom_fichier, $methode ){
        echo"<form action=$nom_fichier method= $methode >\n";
    }
    public function ajouterzonetexte($text, $name){
        echo"$text : <input type='text' name = $name/>\n";
    }
    public function ajouterbouton($name){
        echo"<input type='submit' value=$name/>\n";
    }
    public function getform(){
        echo"</form>\n";
    }
}

?>