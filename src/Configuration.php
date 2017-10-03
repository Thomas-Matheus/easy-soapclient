<?php

namespace EasySoapClient;

/**
 * Class Configuration
 * @package EasySoapClient
 */
final class Configuration
{
    /**
     * @var string
     */
    private $url;

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
     * @param ProxyOptions $proxyOptions
     * @param AuthOptions $authOptions
     */
    public function __construct(
        $url,
        ProxyOptions $proxyOptions = null,
        AuthOptions $authOptions = null
    ) {
        $this->url = $url;
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
     * @return array
     */
    public function getProxyOptions()
    {
        return !is_null($this->proxyOptions)
            ? $this->proxyOptions->get()
            : []
        ;
    }

    /**
     * @return array
     */
    public function getAuthOptions()
    {
        return !is_null($this->authOptions)
            ? $this->authOptions->get()
            : []
        ;
    }
}
