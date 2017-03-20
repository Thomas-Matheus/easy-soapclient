<?php

namespace EasySoapClient\ValueObject;


final class Configuration
{

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $parameters;

    /**
     * Configuration constructor.
     * @param string $url
     * @param string $method
     * @param array $parameters
     */
    public function __construct($url, $method, array $parameters)
    {
        $this->url = $url;
        $this->method = $method;
        $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

}