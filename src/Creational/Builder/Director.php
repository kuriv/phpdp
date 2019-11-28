<?php

namespace PHPDesignPatterns\Creational\Builder;

class Director
{
    /**
     * Build complex instance.
     *
     * @param  VehicleBuilder $builder
     * @return Vehicle
     */
    public function build(VehicleBuilder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->installEngine();
        $builder->installWheel();
        return $builder->getVehicle();
    }
}
