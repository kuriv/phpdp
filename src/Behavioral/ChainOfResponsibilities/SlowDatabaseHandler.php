<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    /**
     * Process required data.
     *
     * @param  RequestInterface $request
     * @return string
     */
    protected function process(RequestInterface $request): string
    {
        return 'Hello World!';
    }
}
