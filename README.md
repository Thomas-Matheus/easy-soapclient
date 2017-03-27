# Easy SoapClient

[![Build Status](https://travis-ci.org/Thomas-Matheus/easy-soapclient.svg?branch=master)](https://travis-ci.org/Thomas-Matheus/easy-soapclient) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Thomas-Matheus/easy-soapclient/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Thomas-Matheus/easy-soapclient/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/Thomas-Matheus/easy-soapclient/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Thomas-Matheus/easy-soapclient/?branch=master) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/7090e5cdd4cf4e92971995ff672eb122)](https://www.codacy.com/app/Thomas-Matheus/easy-soapclient?utm_source=github.com&utm_medium=referral&utm_content=Thomas-Matheus/easy-soapclient&utm_campaign=badger) [![Latest Stable Version](https://poser.pugx.org/easy-soapclient/easy-soapclient/version)](https://packagist.org/packages/easy-soapclient/easy-soapclient) [![License](https://poser.pugx.org/easy-soapclient/easy-soapclient/license)](https://packagist.org/packages/easy-soapclient/easy-soapclient)
<br>
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/ba7fc8d5-2156-480c-817c-ed89c13b61ea/big.png)](https://insight.sensiolabs.com/projects/ba7fc8d5-2156-480c-817c-ed89c13b61ea)

<br>
This is a simple library for consuming webservices soap.

## Install
```composer
  composer require easy-soapclient/easy-soapclient
```
## Usage

#### Simple usage
```php
  use EasySoapClient\Client;
  use EasySoapClient\Configuration;
  
  $url = 'http://my-webservice.com/webservice.php?WSDL';
  
  $config = new Configuration($url);
  $result = (new Client($config))->consume();

  print_r($result->myFoo('foo'));
  print_r($result->myBar('bar', 'foo'));
```

#### Usage with Proxy

```php
  use EasySoapClient\Client;
  use EasySoapClient\Configuration;
  use EasySoapClient\ProxyOptions;
  
  $url = 'http://my-webservice.com/webservice.php?WSDL';
  $proxy = new ProxyOptions('your-proxy-host', 3120, 'user', 'password');
  
  $config = new Configuration($url, $proxy);
  $result = (new Client($config))->consume();

  print_r($result->myFoo('foo'));
  print_r($result->myBar('bar', 'foo'));
```

#### Usage with Auth

```php
  use EasySoapClient\Client;
  use EasySoapClient\Configuration;
  use EasySoapClient\AuthOptions;
  
  $url = 'http://my-webservice.com/webservice.php?WSDL';
  $auth = new AuthOptions('user', 'password');
  
  $config = new Configuration($url, null, $auth);
  $result = (new Client($config))->consume();

  print_r($result->myFoo('foo'));
  print_r($result->myBar('bar', 'foo'));
```

## License

The MIT License (MIT). Please see [License File](https://github.com/Thomas-Matheus/easy-soapclient/blob/master/LICENSE) for more information.
