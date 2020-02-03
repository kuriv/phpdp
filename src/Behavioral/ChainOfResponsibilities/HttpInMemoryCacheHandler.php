<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler
{
    /**
     * Store some data here.
     *
     * @var array
     */
    private array $data = [];

    /**
     * Store some data to the current instance and store the handler instance to the parent instance.
     *
     * @param  array        $data
     * @param  Handler|null $handler
     * @return void
     */
    public function __construct(array $data, Handler $handler = null)
    {
        $this->data = $data;
        parent::__construct($handler);
    }

    /**
     * Process required data.
     *
     * @param  RequestInterface $request
     * @return string
     */
    protected function process(RequestInterface $request): string
    {
        $key = sprintf('%s?%s', $request->getUri()->getPath(), $request->getUri()->getQuery());
        return ($request->getMethod() == 'GET' && isset($this->data[$key])) ? $this->data[$key] : '';
    }
}
