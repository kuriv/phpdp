<?php

namespace PHPDesignPatterns\Structural\Composite;

interface Renderable
{
    /**
     * Render some components.
     *
     * @param  void
     * @return string
     */
    public function render(): string;
}
