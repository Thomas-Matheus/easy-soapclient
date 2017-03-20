<?php

namespace EasySoapClient\Context;


class StreamContext
{

    /**
     * Return context for soap client.
     * @return resource
     */
    public function get()
    {
        return stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => false,
                    'disable_compression' => true,
                    'SNI_enabled' => true,
                    'ciphers' => 'ALL!EXPORT!EXPORT40!EXPORT56!aNULL!LOW!RC4'
                ]
            ]
        );
    }
}