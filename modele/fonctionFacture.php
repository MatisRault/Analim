<?php

    Class Facture{
        private string $idFacture;
        private string $idCongressiste;
        private string $idOrganisme;
        private string $idHotel;
        private string $dateFacture;
        private string $prixTotal;
        private string $etatFacture;
    
        public function __construct(string $idFacture = '', string $idCongressiste = '', string $idOrganisme = '', string $idHotel = '', string $dateFacture = '', string $prixTotal = '', string $etatFacture = '') {
            $this->idFacture = $idFacture;
            $this->idCongressiste = $idCongressiste;
            $this->idOrganisme = $idOrganisme;
            $this->idHotel = $idHotel;
            $this->dateFacture = $dateFacture;
            $this->prixTotal = $prixTotal;
            $this->etatFacture = $etatFacture;
        }
        public function getIDFacture() {
            return $this->idFacture;
        }
        public function setIDFacture(string $idFacture) {
            $this->idFacture = $idFacture;
        }
        public function getIDCongressiste() {
            return $this->idCongressiste;
        }
        public function setIDCongressiste(string $idCongressiste) {
            $this->idCongressiste = $idCongressiste;
        }
        public function getIDOrganisme() {
            return $this->idOrganisme;
        }
        public function setIDOrganisme(string $idOrganisme) {
            $this->idOrganisme = $idOrganisme;
        }
        public function getIDHotel() {
            return $this->idHotel;
        }
        public function setIDHotel(string $idHotel) {
            $this->idHotel = $idHotel;
        }
        public function getDateFacture() {
            return $this->dateFacture;
        }
        public function setDateFacture(string $dateFacture) {
            $this->dateFacture = $dateFacture;
        }
        public function getPrixTotal() {
            return $this->prixTotal;
        }
        public function setPrixTotal(string $prixTotal) {
            $this->prixTotal = $prixTotal;
        }
        public function getEtatFacture() {
            return $this->etatFacture;
        }
        public function setEtatFacture(string $etatFacture) {
            $this->etatFacture = $etatFacture;
        }

        
    }