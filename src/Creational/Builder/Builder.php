<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Builder;

class Builder
{
    public function build(VehicleBuilder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addHeadlight();

        return $builder->getVehicle();
    }
}
