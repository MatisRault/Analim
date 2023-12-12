<?php

class Activite {
    private string $libelle;
    private string $horaire;
    private DateTime $date;
    private int $prix;

    public function __construct(string $libelle = '', string $horaire = '', DateTime $date = null, int $prix = 0) {
        $this->libelle = $libelle;
        $this->horaire = $horaire;
        $this->date = $date ?: new DateTime();
        $this->prix = $prix;
    }

    public function getLibelle() {
        return $this->libelle;
    }
    public function setLibelle(string $libelle) {
        $this->libelle = $libelle;
    }
    public function getHoraire() {
        return $this->horaire;
    }
    public function setHoraire(string $horaire) {
        $this->horaire = $horaire;
    }
    public function getDate() {
        return $this->date;
    }
    public function setDate(DateTime $date) {
        $this->date = $date;
    }
    public function getPrix() {
        return $this->prix;
    }
    public function setPrix(int $prix) {
        $this->prix = $prix;
    }

    public function addActivite(){
        include "./bdd/bd_connexion.php";
        $sql = "INSERT INTO activite (libelle, horaire, date, prix) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $this->libelle);
        $stmt->bindValue(2, $this->horaire);
        $stmt->bindValue(3, $this->date->format('Y-m-d H:i:s'));
        $stmt->bindValue(4, $this->prix);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getAllActivite(){
        include "./bdd/bd_connexion.php";
        $sql = "SELECT * FROM activite";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }

    public function SupprUneActivite($id){
        include "./bdd/bd_connexion.php";
        $sql = "DELETE FROM activite WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function ModifUneActivite($id, $libelle, $horaire, $date, $prix){
        include "./bdd/bd_connexion.php";
        $sql = "UPDATE activite SET libelle = ?, horaire = ?, date = ?, prix = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $libelle);
        $stmt->bindValue(2, $horaire);
        $stmt->bindValue(3, $date);
        $stmt->bindValue(4, $prix);
        $stmt->bindValue(5, $id);
        $stmt->execute();
    }
}
