<?php

namespace Tests\EasySoapClient;

use EasySoapClient\Client;
use EasySoapClient\Context\StreamContext;
use EasySoapClient\Options\Options;
use EasySoapClient\Options\AuthOptions;
use EasySoapClient\Configuration;
use EasySoapClient\Options\OtherOptions;
use EasySoapClient\Options\ProxyOptions;
use PHPUnit\Framework\TestCase;

/**
 * Class SoapClientTest
 * @package Tests\EasySoapClient
 */
class SoapClientTest extends TestCase
{

    /**
     * @var Configuration
     */
    protected $config;

    protected function setUp()
    {
        $this->config = new Configuration(
            'http://www.dneonline.com/calculator.asmx?WSDL'
        );
    }

    public function testSoapClientConfigurationInstance()
    {
        $this->assertInstanceOf('EasySoapClient\Configuration', $this->config);
    }

    public function testSoapClientInstance()
    {
        $client = (new Client($this->config))->getClient();
        $this->assertInstanceOf('SoapClient', $client);
    }

    public function testSoapClientOptionsInstance()
    {
        $proxy = (new ProxyOptions('localhost', 80, 'easy-soapclient', '123'))->get();
        $auth = (new AuthOptions('easy-soapclient', 1))->get();
        $options = (new Options($proxy, $auth));

        $this->assertInstanceOf('EasySoapClient\Options\Options', $options);
    }

    public function testSoapClientOptionsType()
    {
        $proxy = (new ProxyOptions('localhost', 80, 'easy-soapclient', '123'))->get();
        $auth = (new AuthOptions('easy-soapclient', 1))->get();
        $options = (new Options($proxy, $auth))->getOptions();
        $this->assertInternalType('array', $options);
    }

    public function testSoapClientProxyType()
    {
        $proxy = (new ProxyOptions('localhost', 80, 'easy-soapclient', '123'))->get();
        $this->assertInternalType('array', $proxy);
    }

    public function testSoapClientAuthType()
    {
        $auth = (new AuthOptions('easy-soapclient', 1))->get();
        $this->assertInternalType('array', $auth);
    }

    public function testSoapClientStreamContextIsNotEmpty()
    {
        $context = (new StreamContext())->get();
        $this->assertNotEmpty($context);
    }

    public function testSoapClientOptionsIsNotEmpty()
    {
        $options = (new Options([], []))->getOptions();
        $this->assertNotEmpty($options);
    }

    public function testSoapClientResult()
    {
        $consume = (new Client($this->config))->getClient();
        $this->assertNotEmpty($consume);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Url is empty
     */
    public function testSoapClientUrlConfigurationException()
    {
        $config = new Configuration(
            ''
        );

        (new Client($config));
    }

    public function testSoapClientOtherOptions()
    {
        $options = (new Options([], []))->getOptions();
        $this->assertEquals(SOAP_1_2, $options['soap_version']);

        $otherOptions = new OtherOptions(SOAP_1_1);
        $options = (new Options([], [], $otherOptions->get()))->getOptions();

        $this->assertEquals(SOAP_1_1, $options['soap_version']);
    }
}
