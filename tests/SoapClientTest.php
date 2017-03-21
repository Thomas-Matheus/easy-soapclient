<?php

namespace Tests\EasySoapClient;


use EasySoapClient\Client;
use EasySoapClient\ValueObject\Configuration;
use PHPUnit\Framework\TestCase;

class SoapClientTest extends TestCase
{

    /**
     * @var Configuration
     */
    protected $config;

    protected function setUp()
    {
        $this->config = (new Configuration(
            '',
            '',
            ['']
        ));
    }

    public function testSoapClientConfigurationStance()
    {
        $this->assertInstanceOf('EasySoapClient\ValueObject\Configuration', $this->config);
    }

    public function testSoapClientStance()
    {
        $client = (new Client($this->config))->buildClient();
        $this->assertInstanceOf('SoapClient', $client);
    }

    public function testSoapClientHasStreamContextAttribute()
    {
        $client = (new Client($this->config))->buildClient();
        $this->assertObjectHasAttribute('_stream_context', $client);
    }

    public function testSoapClientHasSoapVersionAttribute()
    {
        $client = (new Client($this->config))->buildClient();
        $this->assertObjectHasAttribute('_soap_version', $client);
    }

    public function testSoapClientCall()
    {
        $consume = (new Client($this->config))->buildCall();
        $this->assertNotEmpty($consume);
    }

    public function testSoapClientResult()
    {
        $consume = (new Client($this->config))->get();
        $this->assertNotEmpty($consume);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Url is empty
     */
    public function testSoapClientUrlConfigurationException()
    {
        $config = (new Configuration(
            '',
            '',
            ['']
        ));
        (new Client($config));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Method is empty!
     */
    public function testSoapClientMethodConfigurationException()
    {
        $config = (new Configuration(
            '',
            '',
            ['']
        ));
        (new Client($config));
    }

    /**
     * @expectedException \TypeError
     */
    public function testSoapClientParamsConfigurationException()
    {
        $config = (new Configuration(
            '',
            '',
            ''
        ));
        (new Client($config));
    }
}
