<?php

abstract class utilisateur
{

    private int $id;
    private string $nom;
    private string $prenom;
    private string $telephone;
    private DateTime $date_de_naissance;
    private int $civilite;

    public function __toString()
    {
        $genre = ($this->civilite == 1) ? 'Homme' : 'Femme';
        return $this->nom . ' ' . $this->prenom . '<br>' . $this->telephone .'<br>'. $genre. '<br>' . $this->date_de_naissance->format('D-F-Y') . '<br>';
    }
    // retourner le nom avec une fonction
    public function getNom(): string
    {
        return $this->nom;
    }

    //retourner le prenom avec une fonction
    public function getPrenom(): string{

        return $this->prenom;
    }

    //fonction de construction
    public function __construct($nom, $prenom, $telephone, $date_de_naissance, $civilite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->date_de_naissance = $date_de_naissance;
        $this->civilite = ($civilite === null) ? 1 : (int)$civilite;
    }

    //retourner l'id avec une fonction
    public function getId(): int
    {
        return $this->id;
    }
}
