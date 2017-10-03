<?php

namespace EasySoapClient\SoapClient;

use EasySoapClient\Options\Options;
use EasySoapClient\Configuration;

/**
 * Class AbstractSoapClient
 * @package EasySoapClient\SoapClient
 */
class AbstractSoapClient implements SoapClientInterface
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @return \SoapClient
     */
    public function buildClient()
    {

        return (new \SoapClient(
            $this->configuration->getUrl(),
            (new Options(
                $this->configuration->getProxyOptions(),
                $this->configuration->getAuthOptions())
            )->getOptions()
        ));
    }
}
