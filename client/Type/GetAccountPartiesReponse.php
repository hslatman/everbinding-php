<?php

namespace Slatman\Type;

class GetAccountPartiesReponse
{

    /**
     * @var \Slatman\Type\ArrayOfPartyAccountDetails
     */
    private $Results;

    /**
     * @var \Slatman\Type\PagingResponse
     */
    private $PagingResponse;

    /**
     * @return \Slatman\Type\ArrayOfPartyAccountDetails
     */
    public function getResults()
    {
        return $this->Results;
    }

    /**
     * @param \Slatman\Type\ArrayOfPartyAccountDetails $Results
     * @return GetAccountPartiesReponse
     */
    public function withResults($Results)
    {
        $new = clone $this;
        $new->Results = $Results;

        return $new;
    }

    /**
     * @return \Slatman\Type\PagingResponse
     */
    public function getPagingResponse()
    {
        return $this->PagingResponse;
    }

    /**
     * @param \Slatman\Type\PagingResponse $PagingResponse
     * @return GetAccountPartiesReponse
     */
    public function withPagingResponse($PagingResponse)
    {
        $new = clone $this;
        $new->PagingResponse = $PagingResponse;

        return $new;
    }


}

