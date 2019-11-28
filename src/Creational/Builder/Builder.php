<?php

namespace PHPDesignPatterns\Creational\Builder;

class Builder
{
    /**
     * Build complex instance.
     *
     * @param  VehicleFactory $builder
     * @return Vehicle
     */
    public function build(VehicleFactory $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->installEngine();
        $builder->installWheel();
        return $builder->getVehicle();
    }
}
