<?php

namespace EasySoapClient;


use EasySoapClient\ValueObject\Configuration;
use EasySoapClient\SoapClient\AbstractSoapClient;

final class Client extends AbstractSoapClient implements ClientInterface
{

    /**
     * Client constructor.
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $this->configuration = $config;
        $this->validate();
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->buildCall();
    }

    /**
     * @throws \InvalidArgumentException
     */
    private function validate()
    {
        if (empty($this->configuration->getMethod())) {
            throw new \InvalidArgumentException('Method is empty!');
        }

        if (empty($this->configuration->getUrl())) {
            throw new \InvalidArgumentException('Url is empty');
        }

        if (!is_array($this->configuration->getParameters())) {
            throw new \TypeError('Parameters is empty or is not array');
        }
    }

}
