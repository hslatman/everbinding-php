<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetPartiesResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\ArrayOfParty
     */
    private $Results;

    /**
     * @var \Slatman\EVerbinding\Type\PagingResponse
     */
    private $PagingResponse;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\ArrayOfParty $Results
     * @var \Slatman\EVerbinding\Type\PagingResponse $PagingResponse
     */
    public function __construct($Results, $PagingResponse)
    {
        $this->Results = $Results;
        $this->PagingResponse = $PagingResponse;
    }

    /**
     * @return \Slatman\EVerbinding\Type\ArrayOfParty
     */
    public function getResults()
    {
        return $this->Results;
    }

    /**
     * @param \Slatman\EVerbinding\Type\ArrayOfParty $Results
     * @return GetPartiesResponse
     */
    public function withResults($Results)
    {
        $new = clone $this;
        $new->Results = $Results;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\PagingResponse
     */
    public function getPagingResponse()
    {
        return $this->PagingResponse;
    }

    /**
     * @param \Slatman\EVerbinding\Type\PagingResponse $PagingResponse
     * @return GetPartiesResponse
     */
    public function withPagingResponse($PagingResponse)
    {
        $new = clone $this;
        $new->PagingResponse = $PagingResponse;

        return $new;
    }


}

