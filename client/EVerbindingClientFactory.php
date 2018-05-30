<?php

namespace Slatman\EVerbinding;

use Slatman\EVerbinding\EVerbindingClient;
use Slatman\EVerbinding\EVerbindingClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class EVerbindingClientFactory
{

    public static function factory(string $wsdl) : \Slatman\EVerbinding\EVerbindingClient
    {
        $clientFactory = new PhproClientFactory(EVerbindingClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(EVerbindingClassmap::getCollection());

        return $clientBuilder->build();
    }


}

