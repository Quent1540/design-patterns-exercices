<?php

namespace App;

class GPU implements Computer {

    public function getPrice(): int
    {
        return 600;
    }

    public function getDescription(): string
    {
        return "Carte graphique";
    }
}