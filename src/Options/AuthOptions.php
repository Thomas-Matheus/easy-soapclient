<?php

namespace EasySoapClient\Options;

/**
 * Class AuthOptions
 * @package EasySoapClient
 */
class AuthOptions implements OptionsInterface
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * AuthOptions constructor.
     * @param string $login
     * @param string $password
     */
    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function get()
    {
        return [
            'login'     => $this->login,
            'password'  => $this->password,
        ];
    }

}
