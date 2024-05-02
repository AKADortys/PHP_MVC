<?php

class User {
    private int $id;
    private string $nom;
    private string $prenom;
    private $cnx;

    public function __construct($cnx) {
        $this->cnx = $cnx;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function afficheUser() {
        
        $sql = 'SELECT * FROM client WHERE id = :id;';
        $req = $this->cnx->prepare($sql);
        $req->bindValue(':id', $this->id);
        $req->execute();
        return $req;
    }

    public function afficheClient() {
        $sql = 'SELECT * FROM client';
        $req = $this->cnx->prepare($sql);
        $req->execute();
        return $req;
    }

    public function ajouteClient() {
        $sql= 'INSERT INTO client (Prenom,Nom) VALUES (:prenom,:nom);';
        $req = $this->cnx->prepare($sql);
        $req->bindValue(':nom', $this->nom);
        $req->bindValue(':prenom', $this->prenom);
        $req->execute();
        return $req;
    }

    public function suppClient() {
        $sql = 'DELETE FROM client WHERE id = :id';
        $req = $this->cnx->prepare($sql);
        $req->bindValue(':id', $this->id);
        $req->execute();
        return $req;
    }

    public function modifClient(string $nouveauNom, string $nouveauPrenom) {
        $sql = 'UPDATE client SET Nom = :nom, Prenom = :prenom WHERE id = :id';
        $req = $this->cnx->prepare($sql);
        $req->bindValue(':id', $this->id);
        $req->bindValue(':nom', $nouveauNom);
        $req->bindValue(':prenom', $nouveauPrenom);
        $req->execute();
        return $req;
    }
}

?>
