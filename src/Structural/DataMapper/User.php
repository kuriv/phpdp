<?php

namespace Kuriv\PHPDesignPatterns\Structural\DataMapper;

class User
{
    /**
     * Store the username.
     *
     * @var string
     */
    private $username;

    /**
     * Store the email.
     *
     * @var string
     */
    private $email;

    /**
     * Store the username and email to the current instance.
     *
     * @param  string $username
     * @param  string $email
     * @return void
     */
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * Get the username.
     *
     * @param  void
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Get the email.
     *
     * @param  void
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get the created instance.
     *
     * @param  array  $array
     * @return User
     */
    public static function getInstance(array $array): User
    {
        return new self($array['username'], $array['email']);
    }
}
