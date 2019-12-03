<?php

namespace PHPDesignPatterns\Structural\DependencyInjection;

class Connection
{
    /**
     * Store the instance of the config.
     *
     * @var Config
     */
    private $config;

    /**
     * Store the instance.
     *
     * @param  Config $config
     * @return void
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Get the DSN string.
     *
     * @param  void
     * @return string
     */
    public function getDSN(): string
    {
        return sprintf(
            'mysql:host=%s;port=%d;dbname=%s',
            $this->config->getHost(),
            $this->config->getPort(),
            $this->config->getDatabase()
        );
    }
}
