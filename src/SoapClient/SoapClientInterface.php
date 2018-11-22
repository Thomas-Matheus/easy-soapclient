<?php

namespace EasySoapClient\SoapClient;

/**
 * Interface SoapClientInterface
 * @package EasySoapClient\SoapClient
 */
interface SoapClientInterface
{

    /**
     * Return a new SoapClient.
     * @return \SoapClient
     */
    public function buildClient();
}
