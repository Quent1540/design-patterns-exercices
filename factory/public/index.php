<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici
use App\Factory\VehiculeFactory;

try{
    $car = VehiculeFactory::create("Car", 1, "Essence");
    echo "Cout par km de la voiture = " . $car->getCostPerKm() . "€, type carburant = " . $car->getFuelType() . "<br>";
    $bicycle = VehiculeFactory::create("Bicycle", 0, "Humain");
    echo "Cout par km du velo = " . $bicycle->getCostPerKm() . "€, type carburant = " . $bicycle->getFuelType() . "<br>";
    $truck = VehiculeFactory::create("Truck", 2, "gazole");
    echo "Cout par km du camion = " . $truck->getCostPerKm() . "€, type carburant = " . $truck->getFuelType() . "<br>";

    $vehicule = VehiculeFactory::createFromDistanceAndWeight(50,250000000);
    echo"retourne un camion (gazole et 2): " . $vehicule->getFuelType() . " " . $vehicule->getCostPerKm() . "<br>";
    $vehicule2 = VehiculeFactory::createFromDistanceAndWeight(10,0);
    echo"retourne un velo (propre force et 0): " . $vehicule2->getFuelType() . " " . $vehicule2->getCostPerKm() . "<br>";
    $vehicule3 = VehiculeFactory::createFromDistanceAndWeight(10,250000000);
    echo"retourne un camion (gazole et 2) " . $vehicule3->getFuelType() . " " . $vehicule3->getCostPerKm() . "<br>";
    $vehicule4 = VehiculeFactory::createFromDistanceAndWeight(40,150);
    echo"retourne une voiture (essence et 1) " . $vehicule4->getFuelType() . " " . $vehicule4->getCostPerKm() . "<br>";

}
catch(error $error){
    return $error->getTrace();
}