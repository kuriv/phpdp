<?php

namespace PHPDesignPatterns\Structural\Composite;

class Text implements Renderable
{
    /**
     * Store a piece of text.
     *
     * @var string
     */
    private $text;

    /**
     * Store a piece of text to the current instance.
     *
     * @param  string $text
     * @return void
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * Render a piece of text.
     *
     * @param  void
     * @return string
     */
    public function render(): string
    {
        return $this->text;
    }
}
