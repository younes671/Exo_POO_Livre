
<h1>Exercice POO</h1>




<?php
        spl_autoload_register(function ($class){
            require $class . '.class.php';
        });

        $auteur = new Auteur ("King", "Stephen");
        $livre1 = new Livre ("Ca", 1138, 1986, 20, $auteur);
        $livre2 = new Livre ("Simetierre", 374, 1983, 15, $auteur);
        $livre3 = new Livre ("Le Fléau", 823, 1978, 14, $auteur);
        $livre4 = new Livre ("Shining", 447, 1977, 16, $auteur);

        // echo "<h2><b>Livres de " . $auteur . "</h2></b><br>";
        // echo $livre;

        echo $auteur->afficherBibliographie();

?>