<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Observer;

use SplSubject;
use SplObjectStorage;
use SplObserver;

class User implements SplSubject
{
    /**
     * Store the email.
     *
     * @var string
     */
    private $email;

    /**
     * Store the object storage instance.
     *
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * Store the object storage instance to the current instance.
     *
     * @param  void
     * @return void
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage;
    }

    /**
     * Attach an observer instance.
     *
     * @param  SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * Detach an observer instance.
     *
     * @param  SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * Perform notify action.
     *
     * @param  void
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Change the email and notify.
     *
     * @param  string $email
     * @return void
     */
    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
}
