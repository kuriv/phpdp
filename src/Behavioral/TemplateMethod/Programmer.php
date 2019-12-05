<?php

namespace PHPDesignPatterns\Behavioral\TemplateMethod;

class Programmer extends Daily
{
    /**
     * Date with girlfriend.
     *
     * @param  void
     * @return string
     */
    protected function date(): string
    {
        return 'Programmer has no girlfriend';
    }
}
