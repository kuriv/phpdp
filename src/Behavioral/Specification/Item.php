<?php

namespace PHPDesignPatterns\Behavioral\Specification;

class Item
{
    /**
     * Store the price.
     *
     * @var float
     */
    private $price;

    /**
     * Store the price to the current instance.
     *
     * @param  float $price
     * @return void
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * Get the price.
     *
     * @param  void
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
