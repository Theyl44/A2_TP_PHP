<?php
trait Un {
    function small($text){
        echo '<small>'.$text.'</small>';
    }

    function big($text){
        echo '<h2>'.$text.'</h2>';
    }
}

trait Deux{
    function small($text){
        echo '<i>'.$text.'</i>';
    }

    function big($text){
        echo '<h4>'.$text.'</h4>';
    }
}

class Texte {
    use Un,Deux {
        Un::big insteadof Deux;
        Deux::small insteadof Un;
        Deux::big as gros;
        Deux::small as petit;
    }
}
$texte = new Texte();
$texte->small("manuel");
$texte->big("php");
$texte->gros("Enface");
$texte->petit("txt");
?>
