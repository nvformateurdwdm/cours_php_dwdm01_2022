<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cours</title>
</head>
<body>
    <?php 
    
        // ma première déclaration de variable en PHP.
        /**
         * Je veux mettre
         * un texte sur plusieurs lignes.
         */
        $nom = "VEDRINE";
        $prenom = "Nicolas";

        echo $nom;
        echo "<br>";
        echo $prenom;
        echo "<br>";
        $nomComplet = $prenom . " " . $nom;
        echo $nomComplet;
        echo "<br>";
        var_dump($nomComplet);
        echo "<br>";

        $age = 12;
        $phrase = "Bonjour, je m'appelle " . $nomComplet . ". J'ai " . $age . " ans.";
        echo "<br>";
        echo strlen($nomComplet);
        echo "<br>";
        echo str_word_count($phrase);
        echo "<br>";
        echo strpos($phrase, "j");
        echo "<br>";
        echo strrev($phrase);
        echo "<br>";
        echo str_replace("12", "41", $phrase);
        echo "<br>";

        $bool = true;
        var_dump($bool);
        echo "<br>";
        $condition = $nom == $nom;
        var_dump($condition);
        echo "<br>";
        // tableau
        $jourDeLaSemaine = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
        array_push($jourDeLaSemaine, "dimanche");
        var_dump($jourDeLaSemaine);

        for ($i=0; $i < count($jourDeLaSemaine); $i++) { 
            echo "<br>";
            echo $jourDeLaSemaine[$i];
        }

        // objet
        echo "<br>";
        $obj = new stdClass();
        var_dump($obj);
        echo "<br>";

        class Personne{
            public $prenom;
            public $nom;

            public function __construct($prenom, $nom){
                $this->prenom = $prenom;
                $this->nom = $nom;
            }

            public function parler(){
                echo $this->prenom . " bla bla bla bla.";
                echo "<br>";
                $this->_test();
            }

            private function _test(){
                echo "Ceci est mon test privé.";
                echo "<br>";
            }

            protected function _prot(){
                echo "Ceci est ma méthode protégée";
                echo "<br>";
            }
        }

        class Stagiaire extends Personne{
            public function __construct($prenom, $nom, $estTimide){
                parent::__construct($prenom, $nom);
                
                $this->estTimide = $estTimide;
            }

            public function sePresenter(){
                if(!$this->estTimide){
                    echo $this->prenom . " " . $this->nom . " " . "se présente.";
                }else{
                    echo $this->prenom . " " . $this->nom . " " . "ne se présente pas.";
                }
                echo "<br>";
                parent::_prot();
            }
        }

        $toto = new Personne("Jean", "MARTIN");
        var_dump($toto);
        echo "<br>";

        // $toto->parler();
        
        $jessica = new Stagiaire("Jessica", "JOSEPHINE", true);
        $richard = new Stagiaire("Richard", "MALAC", false);
        
        var_dump($jessica);
        echo "<br>";
        var_dump($richard);
        echo "<br>";
        
        $jessica->parler();
        
        $jessica->sePresenter();
        $richard->sePresenter();

        $jessica->_prot();



    
    ?>
</body>
</html>