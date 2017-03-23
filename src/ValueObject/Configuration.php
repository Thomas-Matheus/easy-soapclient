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
     * @var ProxyOptions
     */
    private $proxyOptions;

    /**
     * @var AuthOptions
     */
    private $authOptions;

    /**
     * Configuration constructor.
     * @param string $url
     * @param string $method
     * @param array $parameters
     * @param ProxyOptions $proxyOptions
     * @param AuthOptions $authOptions
     */
    public function __construct(
        $url,
        $method,
        array $parameters,
        ProxyOptions $proxyOptions = null,
        AuthOptions $authOptions = null
    ) {
        $this->url = $url;
        $this->method = $method;
        $this->parameters = $parameters;
        $this->proxyOptions = $proxyOptions;
        $this->authOptions = $authOptions;
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

    /**
     * @return array
     */
    public function getProxyOptions()
    {
        return !is_null($this->proxyOptions)
            ? $this->proxyOptions->getProxy()
            : []
        ;
    }

    /**
     * @return array
     */
    public function getAuthOptions()
    {
        return !is_null($this->authOptions)
            ? $this->authOptions->getAuth()
            : []
        ;
    }

}

