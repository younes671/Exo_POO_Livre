<?php

        class Livre {
            private string $titre;
            private int $nbPages;
            private int $anneeParution;
            private int $prix;
            private Auteur $auteur;
            
            
            public function __construct(string $titre, int $nbPages, int $anneeParution, int $prix, Auteur $auteur){
                $this->titre =$titre;
                $this->nbPages =$nbPages;
                $this->anneeParution =$anneeParution;
                $this->prix =$prix;
                $this->auteur =$auteur;
                $this->auteur->addLivre($this);
            }

            public function getTitre(): string {return $this->titre;}
            public function getNbPages(): int {return $this->nbPages;}
            public function getAnneeParution(): int {return $this->anneeParution;}
            public function getPrix(): int {return $this->prix;}
            public function getAuteur(): Auteur {return $this->auteur;}

            public function setTtitre($titre){return $this->titre = $titre;}
            public function setNbPages($nbPages){return $this->nbPages = $nbPages;}
            public function setAnneeParution($anneeParution){return $this->anneeParution = $anneeParution;}
            public function setPrix($prix){return $this->prix = $prix;}
            public function setAuteur(Auteur $auteur){return $this->auteur = $auteur;}




            public function __toString(){
                return $this->getTitre() ." (" . $this->getAnneeParution() . ") : " . $this->getNbPages() . " pages / " . $this->getprix() . " €";
            }

        }



?>