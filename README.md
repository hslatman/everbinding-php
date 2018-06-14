# eVerbinding SOAP Client for API v3

This is a basic PHP SOAP client for the eVerbinding SOAP API v3.

## Description

This PHP SOAP client was automatically generated from the eVerbinding WSDL file using the [soap-client](https://github.com/phpro/soap-client) library.


## Installation

```bash
$ composer require hslatman/everbinding-php
```

## Usage

```php
$output = new ConsoleOutput();
$logger = new Logger\ConsoleLogger($output);
$dispatcher = new EventDispatcher();

$wsdl = 'testapi.everbinding.nl.v3.wsdl.xml'; // This can also be an URL
$soap_options = [
    'cache_wsdl' => WSDL_CACHE_NONE
];

/** @var ClientFactory $clientFactory */
$clientFactory = new ClientFactory(EVerbindingClient::class);

/** @var ClientBuilder $clientBuilder */
$clientBuilder = new ClientBuilder($clientFactory, $wsdl, $soap_options);
$clientBuilder->withLogger($logger);
$clientBuilder->withEventDispatcher($dispatcher);
$clientBuilder->addClassMap(new ClassMap('WsdlType', EVerbindingClassmap::class));

/** @var \Slatman\EVerbinding\EVerbindingClient $client */
$client = $clientBuilder->build();

$key = 'bla';
$secret = 'bla';

/** @var Login $login */
$login = new Login($key, $secret);
$response = $client->login($login);

echo $response->getSecurityToken();
```

You can also check the [test.php](test/test.php) file for a complete example including support for debugging the requests and responses using a proxy.

## Development

This library was created using the [soap-client](https://github.com/phpro/soap-client) library.
It can be used to generate clients for specific SOAP APIs based on a WSDL file or URL.
The library provides a script that can generate classmaps, client factories and clients, all based on a WSDL and a configuration file.
Below is a short example for soap-client usage within this project.

```bash
# generate a classmap
$ ./vendor/bin/soap-client generate:classmap --config=config/soap-client.php -o

# generate a client factory
$ ./vendor/bin/soap-client generate:clientfactory --config=config/soap-client.php -o

# generate a client
$ ./vendor/bin/soap-client generate:client --config=config/soap-client.php -o
```

More documentation about using soap-client can be found in on the project [repository](https://github.com/phpro/soap-client).


## Notes

On their developer website, eVerbinding mentions that the correct WSDL file to use will be provided on request.
A version that is publicly available, however, can be found at https://testapi.everbinding.nl/soap/v3/service.wsdl.
I used a copy of this file to generate this PHP SOAP client.

## TODO

An imcomplete list of things to do:

* Improve documentation and usage
* Add tests
* Look into whether we can handle errors more cleanly
