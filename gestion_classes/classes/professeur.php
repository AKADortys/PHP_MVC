<?php
require_once('utilisateur.php');
require_once('eleve.php');

class professeur extends utilisateur{
    private array $eleves = [];


    public function nbr_eleve() 
    {
        return count($this->eleves);
    }

    public function ajouterEleve($eleve) {
        if ($eleve instanceof eleve)
        array_push($this->eleves, $eleve);
    }

    public function retirerEleve(Eleve $eleve)
    {
        $key = array_search($eleve, $this->eleves, true);
    }
};