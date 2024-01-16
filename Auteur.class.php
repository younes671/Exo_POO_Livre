<?php

        class Auteur {
            private string $name;
            private string $firstName;
            private array $livre;
            
            public function __construct($name, $firstName){
                $this->name = $name;
                $this->firstName = $firstName;
                $this->livre = [];
            }

            public function getName(){return $this->name;}
            public function getFirstName(){return $this->firstName;}
            public function getLivres(){return $this->livre;}

            public function setName($name){return $this->name = $name;}
            public function setFirstName($firstName){return $this->firstName = $firstName;}
            public function setLivres($livre){$this->livre = $livre; return $this;}

            public function addLivre(Livre $livre){
                $this->livre[] = $livre;
                // array_push($this->livre, $livre);
            }

            public function afficherBibliographie(){
                $result = "<h1>Les livres de $this</h1><br><ul>";

                foreach($this->livre as $livre){
                    $result .= "<li><b>" . $livre . "</b></li><br>";
                }
                $result .= "</ul>";
                return $result;
            }

            public function __toString(){
                return $this->firstName . " " . $this->name;
            }

        }



?>