<?php

namespace EasySoapClient;


class AuthOptions
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

    public function getAuth()
    {
        return [
            'login'     => $this->login,
            'password'  => $this->password,
        ];
    }

}

