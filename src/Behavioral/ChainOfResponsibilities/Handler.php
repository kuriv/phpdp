<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    /**
     * Store the handler instance.
     *
     * @var Handler|null
     */
    private $handler = null;

    /**
     * Store the handler instance to the current instance.
     *
     * @param  Handler|null $handler
     * @return void
     */
    public function __construct(Handler $handler = null)
    {
        $this->handler = $handler;
    }

    /**
     * Return the processed data.
     *
     * @param  RequestInterface $request
     * @return string
     */
    final public function handle(RequestInterface $request): string
    {
        $data = $this->processing($request);
        if (empty($data) && isset($this->handler)) {
            $data = $this->handler->handle($request);
        }
        return $data;
    }

    /**
     * Processing required data.
     *
     * @param  RequestInterface $request
     * @return string
     */
    abstract protected function processing(RequestInterface $request): string;
}
