<?php

namespace EasySoapClient\Options;


use EasySoapClient\Context\StreamContext;

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
     * Options constructor.
     * @param array $proxyOptions
     * @param array $authOptions
     */
    public function __construct(array $proxyOptions, array $authOptions)
    {
        $this->proxyOptions = $proxyOptions;
        $this->authOptions = $authOptions;
    }

    private function builderOptions()
    {
        return array_merge(
            $this->defaultOptions(),
            $this->proxyOptions,
            $this->authOptions
        );
    }

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

