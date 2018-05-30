<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfPartyAccountDetails implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\PartyAccountDetails
     */
    private $PartyAccountDetails;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\PartyAccountDetails $PartyAccountDetails
     */
    public function __construct($PartyAccountDetails)
    {
        $this->PartyAccountDetails = $PartyAccountDetails;
    }

    /**
     * @return \Slatman\EVerbinding\Type\PartyAccountDetails
     */
    public function getPartyAccountDetails()
    {
        return $this->PartyAccountDetails;
    }

    /**
     * @param \Slatman\EVerbinding\Type\PartyAccountDetails $PartyAccountDetails
     * @return ArrayOfPartyAccountDetails
     */
    public function withPartyAccountDetails($PartyAccountDetails)
    {
        $new = clone $this;
        $new->PartyAccountDetails = $PartyAccountDetails;

        return $new;
    }


}

