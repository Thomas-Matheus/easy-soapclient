<?php

namespace EasySoapClient;


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
        $this->urlValidator();
    }

    /**
     * @return mixed
     */
    public function consume()
    {
        return $this->buildClient();
    }

    /**
     * @throws \InvalidArgumentException
     */
    private function urlValidator()
    {
        if (empty($this->configuration->getUrl())
            || false === filter_var($this->configuration->getUrl(), FILTER_VALIDATE_URL)
        ) {
            throw new \InvalidArgumentException('Url is empty');
        }
    }

}

