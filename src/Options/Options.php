<?php

namespace EasySoapClient\Options;

use EasySoapClient\Context\StreamContext;

/**
 * Class Options
 * @package EasySoapClient\Options
 */
class Options
{
    /**
     * @var array
     */
    private $proxyOptions;

    /**
     * @var array
     */
    private $authOptions;

    /**
     * @var array
     */
    private $otherOptions;

    /**
     * Options constructor.
     * @param array $proxyOptions
     * @param array $authOptions
     * @param array $otherOptions
     */
    public function __construct(array $proxyOptions, array $authOptions, array $otherOptions = array())
    {
        $this->proxyOptions = $proxyOptions;
        $this->authOptions = $authOptions;
        $this->otherOptions = $otherOptions;
    }

    /**
     * @return array
     */
    private function builderOptions()
    {
        return array_merge(
            $this->defaultOptions(),
            $this->proxyOptions,
            $this->authOptions,
            $this->otherOptions
        );
    }

    /**
     * @return array
     */
    private function defaultOptions()
    {
        return [
            'cache_wsdl' => WSDL_CACHE_NONE,
            'trace' => true,
            'soap_version' => SOAP_1_2,
            'exceptions' => true,
            'stream_context' => (new StreamContext())->get(),
        ];
    }

    /**
     * Return Soap Options.
     * @return array
     */
    public function getOptions()
    {
        return $this->builderOptions();
    }
}
