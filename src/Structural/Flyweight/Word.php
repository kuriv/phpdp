<?php

namespace PHPDesignPatterns\Structural\Flyweight;

class Word implements Text
{
    /**
     * Store a word.
     *
     * @var string
     */
    private $word;

    /**
     * Store a word to the current instance.
     *
     * @param  string $word
     * @return void
     */
    public function __construct(string $word)
    {
        $this->word = $word;
    }

    /**
     * Render a word.
     *
     * @param  string $font
     * @return string
     */
    public function render(string $font): string
    {
        return sprintf('Word %s with font %s', $this->word, $font);
    }
}
