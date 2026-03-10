<?php

namespace App;

class OLEDScreen implements Computer {

    public function getPrice(): int
    {
        return 200;
    }

    public function getDescription(): string
    {
        return "Oled screen";
    }
}