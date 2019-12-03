<?php

namespace PHPDesignPatterns\Structural\DependencyInjection;

class Config
{
    /**
     * Store the config of the host.
     *
     * @var string
     */
    private $host;

    /**
     * Store the config of the port.
     *
     * @var int
     */
    private $port;

    /**
     * Store the config of the database.
     *
     * @var string
     */
    private $database;

    /**
     * Store all config for the current instance.
     *
     * @param  string $host
     * @param  int    $port
     * @param  string $database
     * @return void
     */
    public function __construct(string $host, int $port, string $database)
    {
        $this->host = $host;
        $this->port = $port;
        $this->database = $database;
    }

    /**
     * Get the config of the host.
     *
     * @param  void
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Get the config of the port.
     *
     * @param  void
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Get the config of the database.
     *
     * @param  void
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }
}
