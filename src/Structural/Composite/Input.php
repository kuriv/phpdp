<?php

namespace PHPDesignPatterns\Structural\Composite;

class Input implements Renderable
{
    /**
     * Render an input box.
     *
     * @param  void
     * @return string
     */
    public function render(): string
    {
        return '<input type="text">';
    }
}
