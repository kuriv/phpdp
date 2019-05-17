<?php

namespace PHPDesignPatterns\Creational\Builder;

class Director
{
    public function build(VehicleBuilder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addWheel();
        return $builder->getVehicle();
    }
}
