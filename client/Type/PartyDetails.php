<?php

namespace Slatman\Type;

class PartyDetails
{

    /**
     * @var string
     */
    private $EConnectPartyId;

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

