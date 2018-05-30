<?php

namespace Slatman\Type;

class GetPartyResponse
{

    /**
     * @var \Slatman\Type\PartyDetails
     */
    private $Details;

    /**
     * @return \Slatman\Type\PartyDetails
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param \Slatman\Type\PartyDetails $Details
     * @return GetPartyResponse
     */
    public function withDetails($Details)
    {
        $new = clone $this;
        $new->Details = $Details;

        return $new;
    }


}

