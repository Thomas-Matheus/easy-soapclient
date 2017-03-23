# Easy SoapClient

[![Build Status](https://travis-ci.org/Thomas-Matheus/easy-soapclient.svg?branch=master)](https://travis-ci.org/Thomas-Matheus/easy-soapclient) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Thomas-Matheus/easy-soapclient/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Thomas-Matheus/easy-soapclient/?branch=master) [![Code Coverage](https://scrutinizer-ci.com/g/Thomas-Matheus/easy-soapclient/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Thomas-Matheus/easy-soapclient/?branch=master) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/7090e5cdd4cf4e92971995ff672eb122)](https://www.codacy.com/app/Thomas-Matheus/easy-soapclient?utm_source=github.com&utm_medium=referral&utm_content=Thomas-Matheus/easy-soapclient&utm_campaign=badger)
<br>
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/ba7fc8d5-2156-480c-817c-ed89c13b61ea/big.png)](https://insight.sensiolabs.com/projects/ba7fc8d5-2156-480c-817c-ed89c13b61ea)

<br>
This is a simple library for consuming webservices soap.

## Install
 

## Usage

#### Simple usage
```php
  use EasySoapClient\Client;
  use EasySoapClient\ValueObject\Configuration;
  
  $url = 'http://my-webservice.com/webservice.php?WSDL';
  $method = 'getClients';
  $params = ['arg1', 'arg2', [1, 2]];
  
  $config = new Configuration($url, $method, $params);
  $result = (new Client($config))->consume();
  print_r($result);
```

#### Usage using proxy

```php
  use EasySoapClient\Client;
  use EasySoapClient\ValueObject\Configuration;
  use EasySoapClient\ValueObject\ProxyOptions;
  
  $url = 'http://my-webservice.com/webservice.php?WSDL';
  $method = 'getClients';
  $params = ['arg1', 'arg2', [1, 2]];
  
  $proxy = new ProxyOptions('your-proxy-host', 3120, 'user', 'password');
  
  $config = new Configuration($url, $method, $params, $proxy);
  $result = (new Client($config))->consume();
  print_r($result);
```

#### Usage using soap auth

```php
  use EasySoapClient\Client;
  use EasySoapClient\ValueObject\Configuration;
  use EasySoapClient\ValueObject\AuthOptions;
  
  $url = 'http://my-webservice.com/webservice.php?WSDL';
  $method = 'getClients';
  $params = ['arg1', 'arg2', [1, 2]];
  
  $auth = new AuthOptions('user', 'password');
  
  $config = new Configuration($url, $method, $params, null, $auth);
  $result = (new Client($config))->consume();
  print_r($result);
```

## License

The MIT License (MIT). Please see [License File](https://github.com/Thomas-Matheus/easy-soapclient/blob/master/LICENSE) for more information.
