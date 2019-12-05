<?php

namespace PHPDesignPatterns\Behavioral\TemplateMethod;

class Person extends Daily
{
    /**
     * Date with girlfriend.
     *
     * @param  void
     * @return string
     */
    protected function date(): string
    {
        return 'Date with girlfriend';
    }
}
