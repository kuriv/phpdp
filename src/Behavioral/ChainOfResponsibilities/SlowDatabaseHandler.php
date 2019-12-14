<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{
    /**
     * Processing required data.
     *
     * @param  RequestInterface $request
     * @return string
     */
    protected function processing(RequestInterface $request): string
    {
        return 'Hello World!';
    }
}
