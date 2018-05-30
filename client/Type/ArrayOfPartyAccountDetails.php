<?php

namespace Slatman\Type;

class ArrayOfPartyAccountDetails
{

    /**
     * @var \Slatman\Type\PartyAccountDetails
     */
    private $PartyAccountDetails;

    /**
     * @return \Slatman\Type\PartyAccountDetails
     */
    public function getPartyAccountDetails()
    {
        return $this->PartyAccountDetails;
    }

    /**
     * @param \Slatman\Type\PartyAccountDetails $PartyAccountDetails
     * @return ArrayOfPartyAccountDetails
     */
    public function withPartyAccountDetails($PartyAccountDetails)
    {
        $new = clone $this;
        $new->PartyAccountDetails = $PartyAccountDetails;

        return $new;
    }


}

