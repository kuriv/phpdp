<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class Handler
{
    /**
     * Store the handler instance.
     *
     * @var Handler|null
     */
    private ?Handler $handler = null;

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
     * @param  int    $request
     * @return string
     */
    final public function handle(int $request): string
    {
        $data = $this->process($request);
        if (empty($data) && isset($this->handler)) {
            $data = $this->handler->handle($request);
        }
        return $data;
    }

    /**
     * Process required data.
     *
     * @param  int    $request
     * @return string
     */
    abstract protected function process(int $request): string;
}
