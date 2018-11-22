<?php

namespace EasySoapClient\Options;

/**
 * Class OtherOptions
 * @package EasySoapClient\Options
 */
class OtherOptions implements OptionsInterface
{
    /**
     * @var string
     */
    private $soapVersion;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $localCert;

    /**
     * @var int
     */
    private $connectionTimeout;

    /**
     * @var int
     */
    private $use;

    /**
     * @var int
     */
    private $style;

    /**
     * @var int
     */
    private $cacheWsdl;

    /**
     * @var bool
     */
    private $trace;

    /**
     * @var bool
     */
    private $exceptions;

    /**
     * OtherOptions constructor.
     * @param string $soapVersion
     * @param string $uri
     * @param string $localCert
     * @param int $connectionTimeout
     * @param int $use
     * @param int $style
     * @param int $cacheWsdl
     * @param bool $trace
     * @param bool $exceptions
     */
    public function __construct(
        $soapVersion = null,
        $uri = null,
        $localCert = null,
        $connectionTimeout = null,
        $use = null,
        $style = null,
        $cacheWsdl = null,
        $trace = null,
        $exceptions = null
    ) {
        $this->soapVersion = filter_var($soapVersion, FILTER_SANITIZE_STRING);
        $this->uri = filter_var($uri, FILTER_SANITIZE_STRING);
        $this->localCert = filter_var($localCert, FILTER_SANITIZE_URL);
        $this->connectionTimeout = filter_var($connectionTimeout, FILTER_VALIDATE_INT) ? $connectionTimeout : null;
        $this->use = filter_var($use, FILTER_VALIDATE_INT) ? $use : null;
        $this->style = filter_var($style, FILTER_VALIDATE_INT) ? $style : null;
        $this->cacheWsdl = filter_var($cacheWsdl, FILTER_VALIDATE_INT) ? $cacheWsdl : null;
        $this->trace = filter_var($trace, FILTER_VALIDATE_BOOLEAN) ? $trace : null;
        $this->exceptions = filter_var($exceptions, FILTER_VALIDATE_BOOLEAN) ? $exceptions : null;
    }

    /**
     * @return array
     */
    public function get()
    {
        return array_filter([
            'use' => $this->use,
            'uri' => $this->uri,
            'style' => $this->style,
            'trace' => $this->trace,
            'exceptions' => $this->exceptions,
            'cache_wsdl' => $this->cacheWsdl,
            'local_cert' => $this->localCert,
            'soap_version' => $this->soapVersion,
            'connection_timeout' => $this->connectionTimeout
        ], [$this, 'filterValuesArray']);
    }

    /**
     * @param $value
     * @return bool
     */
    private function filterValuesArray($value)
    {
        return !empty($value);
    }
}
