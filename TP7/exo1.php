<?php
class formulaire{
    function __construct($nom_fichier,$method)
    {
        echo "<form action= $nom_fichier method = $method>";
    }
    function ajouterzonetexte($text,$name){
        echo $text."<input type='text' name=$name />";
    }
    function ajouterbouton(){
        echo "<input type='submit' value='Envoyer'/>";
    }
    function getform(){
        echo "</form>";
    }
}

class form2 extends formulaire {
    function ajouterButtonRation($text){
        echo"<input type='radio' value='$text' name='buttonRation'/>";
    }
    function ajouterCasesACocher($text){
        echo"<input type='checkbox' value ='$text' name='casesACocher'/>";

    }
}

$form = new form2("exo1.php","post");
$form->ajouterzonetexte("Votre nom","nom");
echo "<br>";
$form->ajouterzonetexte("Votre code","code");
echo "<br>";
$form->ajouterbouton();
echo "<br>";
$form->ajouterButtonRation("Homme");
echo "<br>";
$form->ajouterButtonRation("Homme");
echo "<br>";
$form->ajouterCasesACocher("Tennis");
echo "<br>";
$form->ajouterCasesACocher("Equitation");
echo "<br>";
$form->getform();
