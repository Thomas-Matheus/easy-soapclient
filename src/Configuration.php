<?php

namespace EasySoapClient;

use EasySoapClient\Options\AuthOptions;
use EasySoapClient\Options\OtherOptions;
use EasySoapClient\Options\ProxyOptions;

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
     * @var array
     */
    private $otherOptions;

    /**
     * Configuration constructor.
     * @param string $url
     * @param ProxyOptions $proxyOptions
     * @param AuthOptions $authOptions
     * @param OtherOptions|null $otherOptions
     */
    public function __construct(
        $url,
        ProxyOptions $proxyOptions = null,
        AuthOptions $authOptions = null,
        OtherOptions $otherOptions = null
    ) {
        $this->url = $url;
        $this->proxyOptions = $proxyOptions;
        $this->authOptions = $authOptions;
        $this->otherOptions = $otherOptions;
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

    /**
     * @return array
     */
    public function getOtherOptions()
    {
        return !is_null($this->otherOptions)
            ? $this->otherOptions->get()
            : []
        ;
    }
}
