# Easy SoapClient

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
