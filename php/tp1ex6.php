
<?php
    class Employe {
        private $matricule;
        private $nom;
        private $prenom;
        private $dateNaissance;
        private $dateEmbauche;
        private $salaire;

        public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire) {
            $this->matricule = $matricule;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = $dateNaissance;
            $this->dateEmbauche = $dateEmbauche;
            $this->salaire = $salaire;
        }

        public function setMatricule($matricule){
            $this->matricule = $matricule;
        }
        public function setnom($nom){
            $this->nom = $nom;
        }
        public function setprenom($prenom){
            $this->prenom = $prenom;
        }
        public function setdateNaissance($dateNaissance){
            $this->dateNaissance = $dateNaissance;
        }
        public function setdateEmbauche($dateEmbauche){
            $this->dateEmbauche = $dateEmbauche;
        }
        public function setsalaire($salaire){
            $this->salaire = $salaire;
        }


        public function getMatricule($matricule){
            return $this->matricule;
        }
        public function getnom($nom){
            return $this->nom = $nom;
        }
        public function getprenom($prenom){
            return $this->prenom;
        }
        public function getdateNaissance($dateNaissance){
            return $this->dateNaissance;
        }
        public function getdateEmbauche($dateEmbauche){
            return $this->dateEmbauche;
        }
        public function getsalaire($salaire){
            return $this->salaire;
        }

        public function calculeAge(){
            $naissance = new DateTime($this->dateNaissance);
            $today = new DateTime();
            return $today->diff($naissance)->y
        }
        public function calculeAnciennete() {
            $embauche = new DateTime($this->dateEmbauche);
            $today = new DateTime();
            return $today->diff($embauche)->y;
        }
        public function augmenterSalaire() {
            $anciennete = $this->calculerAnciennete();
            if ($anciennete < 5) {
                $augmentation = 0.02;
            } elseif ($anciennete <= 10) {
                $augmentation = 0.05;
            } else {
                $augmentation = 0.10;
            }
            $this->salaire *= (1 + $augmentation);
        }
        public function afficherDetails() {
            echo "<h3>Informations de l'employé :</h3>";
            echo "Matricule : {$this->matricule}<br>";
            echo "Nom : {$this->nom}<br>";
            echo "Prénom : {$this->prenom}<br>";
            echo "Date de naissance : {$this->dateNaissance} (Âge : {$this->calculerAge()} ans)<br>";
            echo "Date d'embauche : {$this->dateEmbauche} (Ancienneté : {$this->calculerAnciennete()} ans)<br>";
            echo "Salaire : " . number_format($this->salaire, 2) . " €<br>";
        }

    }

?>