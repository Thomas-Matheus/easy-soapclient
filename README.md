[![Codacy Badge](https://api.codacy.com/project/badge/Grade/7090e5cdd4cf4e92971995ff672eb122)](https://www.codacy.com/app/Thomas-Matheus/easy-soapclient?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Thomas-Matheus/easy-soapclient&amp;utm_campaign=Badge_Grade)

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
