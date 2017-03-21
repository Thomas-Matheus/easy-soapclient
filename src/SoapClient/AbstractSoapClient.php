<?php

namespace EasySoapClient\SoapClient;


use EasySoapClient\Options\Options;
use EasySoapClient\ValueObject\Configuration;

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
            (new Options())->get()
        ));
    }

    /**
     * @return mixed
     */
    public function buildCall()
    {
        return $this->buildClient()->__soapCall(
            $this->configuration->getMethod(),
            $this->configuration->getParameters()
        );
    }

}
