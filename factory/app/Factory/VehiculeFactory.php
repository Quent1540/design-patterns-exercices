<?php
namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Interface\Vehicule;
use Exception;

class VehiculeFactory{
    public static function create($vehiculeType, $costPerKm, $fuelType): Vehicule
    {
        switch($vehiculeType){
            case 'Car': return new Car($costPerKm,$fuelType);
            case 'Truck': return new Truck($costPerKm,$fuelType);
            case 'Bicycle': return new Bicycle($costPerKm,$fuelType);
            default: throw new Exception ("mauvais type de vehicule");
        }
    }
    public static function createFromDistanceAndWeight($distanceKm, $poidsKg): Vehicule
    {
        if ($distanceKm < 0 || $poidsKg < 0) {
            throw new Exception("La distance et le poids doivent être des valeurs positives.");
        }
        if ($poidsKg > 200) {
            return new Truck(2, 'Gazole');
        }

        if ($poidsKg > 20) {
            return new Car(1, 'Essence');
        }

        if ($distanceKm < 20) {
            return new Bicycle(0, 'Votre propre force');
        }

        return new Car(1, 'Essence');
    }

}