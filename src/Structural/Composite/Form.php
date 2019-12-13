<?php

namespace Kuriv\PHPDesignPatterns\Structural\Composite;

class Form implements Renderable
{
    /**
     * Store some elements.
     *
     * @var array
     */
    private $elements = [];

    /**
     * Render all elements stored in the current instance.
     *
     * @param  void
     * @return string
     */
    public function render(): string
    {
        $string = '<form>';
        foreach ($this->elements as $element) {
            $string .= $element->render();
        }
        $string .= '</form>';
        return $string;
    }

    /**
     * Store some elements to the current instance.
     *
     * @param  Renderable $element
     * @return void
     */
    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}
