<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PartyDetails implements RequestInterface
{

    /**
     * @var string
     */
    private $EConnectPartyId;

    /**
     * Constructor
     *
     * @var string $EConnectPartyId
     */
    public function __construct($EConnectPartyId)
    {
        $this->EConnectPartyId = $EConnectPartyId;
    }

    /**
     * @return string
     */
    public function getEConnectPartyId()
    {
        return $this->EConnectPartyId;
    }

    /**
     * @param string $EConnectPartyId
     * @return PartyDetails
     */
    public function withEConnectPartyId($EConnectPartyId)
    {
        $new = clone $this;
        $new->EConnectPartyId = $EConnectPartyId;

        return $new;
    }


}

