<?php

namespace EasySoapClient\SoapClient;



interface SoapClientInterface
{

    /**
     * Return a new SoapClient.
     * @return \SoapClient
     */
    public function buildClient();

    /**
     * Get return to webservice.
     * @return mixed
     */
    public function buildCall();
}