<?php

namespace Slatman\Type;

class GetPartiesResponse
{

    /**
     * @var \Slatman\Type\ArrayOfParty
     */
    private $Results;

    /**
     * @var \Slatman\Type\PagingResponse
     */
    private $PagingResponse;

    /**
     * @return \Slatman\Type\ArrayOfParty
     */
    public function getResults()
    {
        return $this->Results;
    }

    /**
     * @param \Slatman\Type\ArrayOfParty $Results
     * @return GetPartiesResponse
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
     * @return GetPartiesResponse
     */
    public function withPagingResponse($PagingResponse)
    {
        $new = clone $this;
        $new->PagingResponse = $PagingResponse;

        return $new;
    }


}

