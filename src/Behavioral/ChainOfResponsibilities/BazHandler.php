<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

class BazHandler extends Handler
{
    /**
     * Process required data.
     *
     * @param  int    $request
     * @return string
     */
    protected function process(int $request): string
    {
        return $request == 0 ? 'Baz' : '';
    }
}
