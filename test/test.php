<?php
/**
 * Author: Herman Slatman
 * Date: 30/05/2018
 * Time: 15:55
 */

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Phpro\SoapClient\Soap\ClassMap\ClassMap;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\ClientBuilder;
use Symfony\Component\Console\Logger;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\EventDispatcher\EventDispatcher;

use Slatman\EVerbinding\EVerbindingClassmap;
use Slatman\EVerbinding\EVerbindingClient;
use Slatman\EVerbinding\Type\Login;


// Taken some Soap options from http://php.net/manual/en/class.soapclient.php#116724
// Mainly the SSL stuff for debugging using a proxy with SSL termination.
//
// NOTE: Don't use the SSL options in production ever!
//
$stream_context_options = [
    "ssl" => [
        "verify_peer" => false,
        "verify_peer_name" => false
    ]
];

$soap_options = [
    'cache_wsdl' => WSDL_CACHE_NONE,
    'proxy_port' => '8888',
    'proxy_host' => 'localhost',
    'stream_context' => stream_context_create($stream_context_options),
    'verifypeer' => false,
    'verifyhost' => false,
];


$output = new ConsoleOutput();
$logger = new Logger\ConsoleLogger($output);
$dispatcher = new EventDispatcher();

$wsdl = 'testapi.everbinding.nl.v3.wsdl.xml'; // This can also be an URL

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