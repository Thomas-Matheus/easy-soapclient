# Easy SoapClient

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/7090e5cdd4cf4e92971995ff672eb122)](https://www.codacy.com/app/Thomas-Matheus/easy-soapclient?utm_source=github.com&utm_medium=referral&utm_content=Thomas-Matheus/easy-soapclient&utm_campaign=badger)
<br>
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/ba7fc8d5-2156-480c-817c-ed89c13b61ea/big.png)](https://insight.sensiolabs.com/projects/ba7fc8d5-2156-480c-817c-ed89c13b61ea)

## Install

## Usage

```php
  use EasySoapClient\Client;
  use EasySoapClient\ValueObject\Configuration;
  
  $url = 'http://my-webservice.com/webservice.php?WSDL';
  $method = 'getClients';
  $params = ['arg1', 'arg2', 123];
  
  $config = new Configuration($url, $method, $params);
  $result = (new Client($config))->get();
  print_r($result);
```

## Contributing

Please see [CONTRIBUTING]() for details.

## License

The MIT License (MIT). Please see [License File](https://github.com/Thomas-Matheus/easy-soapclient/blob/master/LICENSE) for more information.
