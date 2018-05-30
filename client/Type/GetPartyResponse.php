<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetPartyResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\PartyDetails
     */
    private $Details;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\PartyDetails $Details
     */
    public function __construct($Details)
    {
        $this->Details = $Details;
    }

    /**
     * @return \Slatman\EVerbinding\Type\PartyDetails
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param \Slatman\EVerbinding\Type\PartyDetails $Details
     * @return GetPartyResponse
     */
    public function withDetails($Details)
    {
        $new = clone $this;
        $new->Details = $Details;

        return $new;
    }


}

