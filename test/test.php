<?php
/**
 * Author: Herman Slatman
 * Date: 30/05/2018
 * Time: 15:55
 */

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Slatman\EVerbinding;

use Slatman\EVerbinding\EVerbindingClient;
use Slatman\EVerbinding\EVerbindingClassmap;

use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\ClientBuilder;
use Symfony\Component\Console\Logger;

use Phpro\SoapClient\Soap\ClassMap\ClassMap;
use Symfony\Component\EventDispatcher\EventDispatcher;


$wsdl = 'testapi.everbinding.nl.v3.wsdl.xml';
$clientFactory = new ClientFactory(EVerbindingClient::class);
$soapOptions = [
    'cache_wsdl' => WSDL_CACHE_NONE
];

$output = new \Symfony\Component\Console\Output\ConsoleOutput();
$logger = new Logger\ConsoleLogger($output);

$dispatcher = new EventDispatcher();

/** @var ClientBuilder $clientBuilder */
$clientBuilder = new ClientBuilder($clientFactory, $wsdl, $soapOptions);
$clientBuilder->withLogger($logger);
$clientBuilder->withEventDispatcher($dispatcher);
$clientBuilder->addClassMap(new ClassMap('WsdlType', EVerbindingClassmap::class));

/** @var \Slatman\EVerbinding\EVerbindingClient $client */
$client = $clientBuilder->build();


$key = 'bla';
$secret = 'bla';

$login = new EVerbinding\Type\Login($key, $secret);
$response = $client->login($login);

echo $response->getSecurityToken();