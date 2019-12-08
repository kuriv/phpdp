<?php

namespace PHPDesignPatterns\Behavioral\TemplateMethod;

class People extends Schedule
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
