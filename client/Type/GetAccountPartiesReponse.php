<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAccountPartiesReponse implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\ArrayOfPartyAccountDetails
     */
    private $Results;

    /**
     * @var \Slatman\EVerbinding\Type\PagingResponse
     */
    private $PagingResponse;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\ArrayOfPartyAccountDetails $Results
     * @var \Slatman\EVerbinding\Type\PagingResponse $PagingResponse
     */
    public function __construct($Results, $PagingResponse)
    {
        $this->Results = $Results;
        $this->PagingResponse = $PagingResponse;
    }

    /**
     * @return \Slatman\EVerbinding\Type\ArrayOfPartyAccountDetails
     */
    public function getResults()
    {
        return $this->Results;
    }

    /**
     * @param \Slatman\EVerbinding\Type\ArrayOfPartyAccountDetails $Results
     * @return GetAccountPartiesReponse
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
     * @return GetAccountPartiesReponse
     */
    public function withPagingResponse($PagingResponse)
    {
        $new = clone $this;
        $new->PagingResponse = $PagingResponse;

        return $new;
    }


}

