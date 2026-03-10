<?php

namespace Test;

use App\GPU;
use App\OLEDScreen;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop=new Laptop();
        $this->assertSame('A laptop computer', $laptop->getDescription());
        $this->assertSame(400, $laptop->getPrice());
        $gpu=new GPU($laptop);
        $this->assertSame(600,$gpu->getPrice());
        $this->assertSame('Carte graphique',$gpu->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop=new Laptop();
        $this->assertSame('A laptop computer', $laptop->getDescription());
        $this->assertSame(400, $laptop->getPrice());
        $oled=new OLEDScreen($laptop);
        $this->assertSame(200,$oled->getPrice());
        $this->assertSame('Oled screen',$oled->getDescription());
    }
}