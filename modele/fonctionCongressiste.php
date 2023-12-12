<?php

    class Congressiste{
        private string $nom;
        private string $prenom;
        private string $email;
        private string $adresse;
        private string $ville;
        private string $codePostal;
        private string $tel; 
        private string $idHotel;
        private string $idOrganisme;
        private bool $petitDejeuner;
        private int $etoileSouhaitee;

        public function __construct(string $nom = '', string $prenom = '', string $email = '', string $adresse = '', string $ville = '', string $codePostal = '', string $tel = '', bool $petitDejeuner = false, int $etoileSouhaitee = 0) {
            
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->adresse = $adresse;
            $this->ville = $ville;
            $this->codePostal = $codePostal;
            $this->tel = $tel;
            $this->petitDejeuner = $petitDejeuner;
            $this->etoileSouhaitee = $etoileSouhaitee;
        }

        public function getNom() {
            return $this->nom;
        }
        public function setNom(string $nom) {
            $this->nom = $nom;
        }
        public function getPrenom() {
            return $this->prenom;
        }
        public function setPrenom(string $prenom) {
            $this->prenom = $prenom;
        }
        public function getEmail() {
            return $this->email;
        }
        public function setEmail(string $email) {
            $this->email = $email;
        }
        public function getAdresse() {
            return $this->adresse;
        }
        public function setAdresse(string $adresse) {
            $this->adresse = $adresse;
        }
        public function getVille() {
            return $this->ville;
        }
        public function setVille(string $ville) {
            $this->ville = $ville;
        }
        public function getCodePostal() {
            return $this->codePostal;
        }
        public function setCodePostal(string $codePostal) {
            $this->codePostal = $codePostal;
        }
        public function getTel() {
            return $this->tel;
        }
        public function setTel(string $tel) {
            $this->tel = $tel;
        }
        public function getIdHotel() {
            return $this->idHotel;
        }
        public function getIdOrganisme() {
            return $this->idOrganisme;
        }
        public function getPetitDejeuner() {
            return $this->petitDejeuner;
        }
        public function setPetitDejeuner(string $petitDejeuner) {
            $this->petitDejeuner = $petitDejeuner;
        }
        public function getEtoileSouhaitee() {
            return $this->etoileSouhaitee;
        }
        public function setEtoileSouhaitee(string $etoileSouhaitee) {
            $this->etoileSouhaitee = $etoileSouhaitee;
        }

        public function addUnCongressiste(){
            include "./bdd/bd_connexion.php";
            $sql = "INSERT INTO congressiste  VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $this->nom);
            $stmt->bindValue(2, $this->prenom);
            $stmt->bindValue(3, $this->email);
            $stmt->bindValue(4, $this->adresse);
            $stmt->bindValue(5, $this->ville);
            $stmt->bindValue(6, $this->codePostal);
            $stmt->bindValue(7, $this->tel);
            $stmt->bindValue(8, null);
            $stmt->bindValue(9, null);
            $stmt->bindValue(10, $this->petitDejeuner);
            $stmt->bindValue(11, $this->etoileSouhaitee);
            $stmt->execute();
        }
        
        public function getAllCongressistes(){

            include "./bdd/bd_connexion.php";
            $sql = "SELECT * FROM congressiste ORDER BY nom ASC";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $resultat=$stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultat;
            }

            public function SupprUnCongressiste($id){
                include "./bdd/bd_connexion.php";
                $sql = "DELETE FROM congressiste WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(1, $id);
                $stmt->execute();   
            }
            //function getHotelAsOption() qui va récupérer dans un tableau la liste des hotels et les afficher dans une liste déroulante
            
            public function ModifUnCongressite($id) {
                include "./bdd/bd_connexion.php";
                $sql = "UPDATE congressiste SET nom = ?, prenom = ?, mail = ?, adresse = ?, ville = ?, CP = ?, tel = ?, petitDejeuner = ?, etoileSouhaitee=? WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(1, $this->nom);
                $stmt->bindValue(2, $this->prenom);
                $stmt->bindValue(3, $this->email);
                $stmt->bindValue(4, $this->adresse);
                $stmt->bindValue(5, $this->ville);
                $stmt->bindValue(6, $this->codePostal);
                $stmt->bindValue(7, $this->tel); 
                $stmt->bindValue(8, $this->petitDejeuner);
                $stmt->bindValue(9, $this->etoileSouhaitee);
                $stmt->bindValue(10, $id);

                $stmt->execute();
            }

            
            
    }