<?php
class formulaire{
    function __construct($nom_fichier,$method)
    {
        echo "<form action= $nom_fichier method = $method>";
    }
    function ajouterzonetexte($text,$name){
        echo $text."<input type='text' name=$name />";
    }
    function ajouterLabel($test){
        echo"<br>$test<br>";
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
        echo "$text".'<input type="radio" name="buttonRation" value='.$text.'>';
    }
    function ajouterCasesACocher($text){
        echo"$text".'<input type="checkbox" name='.$text.'>';

    }
}

$form = new form2("exo1.php","post");
$form->ajouterzonetexte("Votre nom","nom");
echo "<br>";
$form->ajouterzonetexte("Votre code","code");
echo "<br>";
$form->ajouterLabel("Quelles est votre sexe ? ");
$form->ajouterButtonRation("Homme");
echo "<br>";
$form->ajouterButtonRation("Femme");
echo "<br>";
$form->ajouterButtonRation("non genré");
echo "<br>";
$form->ajouterLabel("Quelle sportpartiquer vous ?");
$listSport = array("Tennis", "Golf", "Foot", "Volley");
foreach($listSport as $sport){
    $form->ajouterCasesACocher("$sport");
    echo "<br>";
}
$form->ajouterbouton();
$form->getform();
echo"<hr>";
if(isset($_POST['nom']) && isset($_POST['code']) && isset($_POST['buttonRation'])) {
    echo "Votre nom : " . $_POST['nom'] . "<br>";
    echo "Votre code : " . $_POST['code'] . "<br>";
    echo "Votes sexe est : " . $_POST['buttonRation'] . "<br>";
    echo"Vos sports sont : <br>";
    foreach($listSport as $sport){
        if(isset($_POST["$sport"])) {
            echo"$sport<br>";
        }
    }

}
?>
