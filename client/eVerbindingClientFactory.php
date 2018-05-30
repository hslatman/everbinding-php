<?php

namespace Slatman;

use Slatman\eVerbindingClient;
use Slatman\eVerbindingClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class eVerbindingClientFactory
{

    public static function factory(string $wsdl) : \Slatman\eVerbindingClient
    {
        $clientFactory = new PhproClientFactory(eVerbindingClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(eVerbindingClassmap::getCollection());

        return $clientBuilder->build();
    }


}

