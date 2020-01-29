<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Memento;

use InvalidArgumentException;

class State
{
    /**
     * Just a test constant.
     *
     * @var string
     */
    const STATE_CREATED = 'Created';

    /**
     * Just a test constant.
     *
     * @var string
     */
    const STATE_OPENED = 'Opened';

    /**
     * Just a test constant.
     *
     * @var string
     */
    const STATE_ASSIGNED = 'Assigned';

    /**
     * Just a test constant.
     *
     * @var string
     */
    const STATE_CLOSED = 'Closed';

    /**
     * Store the state.
     *
     * @var string
     */
    private string $state;

    /**
     * Define an array of allowed states.
     *
     * @var array
     */
    private static array $validStates = [
        self::STATE_CREATED,
        self::STATE_OPENED,
        self::STATE_ASSIGNED,
        self::STATE_CLOSED
    ];

    /**
     * Store the state to the current instance.
     *
     * @param  string $state
     * @return void
     */
    public function __construct(string $state)
    {
        if (!in_array($state, self::$validStates)) {
            throw new InvalidArgumentException('Invalid state given');
        }
        $this->state = $state;
    }

    /**
     * Get the state string.
     *
     * @param  void
     * @return string
     */
    public function __toString(): string
    {
        return $this->state;
    }
}
