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
     * @return mixed
     */
    public function buildCall();
}