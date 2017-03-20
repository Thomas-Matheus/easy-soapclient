<?php

namespace EasySoapClient\Options;


use EasySoapClient\Context\StreamContext;

class Options
{

    /**
     * Return Soap Options.
     * @return array
     */
    public function get()
    {
        return [
            'cache_wsdl' => WSDL_CACHE_NONE,
            'trace' => true,
            'soap_version' => SOAP_1_2,
            'exceptions' => true,
            'stream_context' => (new StreamContext())->get(),
        ];
    }

}