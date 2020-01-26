<?php

namespace Kuriv\PHPDesignPatterns\More\ServiceLocator;

use OutOfRangeException;
use InvalidArgumentException;

class ServiceLocator
{
    /**
     * Store several instances.
     *
     * @var array
     */
    private array $instances = [];

    /**
     * Store several class names and parameters.
     *
     * @var array
     */
    private array $parameters = [];

    /**
     * Store the service instance to the current instance.
     *
     * @param  string  $class
     * @param  Service $service
     * @return void
     */
    public function addInstance(string $class, Service $service)
    {
        $this->instances[$class] = $service;
    }

    /**
     * Store the class name and parameter to the current instance.
     *
     * @param  string $class
     * @param  array  $parameter
     * @return void
     */
    public function addParameter(string $class, array $parameter)
    {
        $this->parameters[$class] = $parameter;
    }

    /**
     * Check if there is a specified instance or class name.
     *
     * @param  string  $class
     * @return bool
     */
    public function has(string $class): bool
    {
        return isset($this->instances[$class]) || isset($this->parameters[$class]);
    }

    /**
     * Get the created instance.
     *
     * @param  string $class
     * @return Service
     */
    public function getInstance(string $class): Service
    {
        if (isset($this->instances[$class])) {
            return $this->instances[$class];
        }
        $parameter = $this->parameters[$class];
        switch (count($parameter)) {
            case 0:
                $instance = new $class;
                break;
            case 1:
                $instance = new $class($parameter[0]);
                break;
            case 2:
                $instance = new $class($parameter[0], $parameter[1]);
                break;
            case 3:
                $instance = new $class($parameter[0], $parameter[1], $parameter[2]);
                break;
            default:
                throw new OutOfRangeException('Too many arguments given');
                break;
        }
        if (!$instance instanceof Service) {
            throw new InvalidArgumentException(sprintf('Could not register service: %s is not instance of Service', get_class($instance)));
        }
        $this->addInstance($class, $instance);
        return $instance;
    }
}
