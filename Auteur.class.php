<?php

        class Auteur {
            private string $name;
            private string $firstName;
            private array $livres;
            
            public function __construct($name, $firstName){
                $this->name =$name;
                $this->firstName =$firstName;
                $this->livres =[];
            }

            public function getName(){return $this->name;}
            public function getFirstName(){return $this->firstName;}
            public function getLivres(){return $this->livres;}

            public function setName($name){return $this->name = $name;}
            public function setFirstName($firstName){return $this->firstName = $firstName;}
            public function setLivres($livres){$this->livres = $livres; return $this;}

            public function addLivre(Livre $livre){
                $this->livres[] = $livre;
                // array_push($this->livres, $livre);
            }

            public function afficherBibliographie(){
                $result = "<h1>Les livres de $this</h1><br><ul>";

                foreach($this->livres as $livre){
                    $result .= "<li><b>" . $livre . "</b></li><br>";
                }
                $result .= "</ul>";
                return $result;
            }

            public function __toString(){
                return $this->firstName ." " . $this->name;
            }

        }



?>