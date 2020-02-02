<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Specification;

class PriceSpecification implements Specification
{
    /**
     * Store the min price.
     *
     * @var float
     */
    private float $min;

    /**
     * Store the min price.
     *
     * @var float
     */
    private float $max;

    /**
     * Store the min price and max price to the current instance.
     *
     * @param  float $min
     * @param  float $max
     * @return void
     */
    public function __construct(float $min, float $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Return the result of inspect.
     *
     * @param  Item   $item
     * @return bool
     */
    public function inspect(Item $item): bool
    {
        $price = $item->getPrice();
        return $price >= $this->min && $price <= $this->max;
    }
}
