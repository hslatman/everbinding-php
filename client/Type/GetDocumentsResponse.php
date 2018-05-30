<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\ArrayOfDocument
     */
    private $Results;

    /**
     * @var \Slatman\EVerbinding\Type\PagingResponse
     */
    private $PagingResponse;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\ArrayOfDocument $Results
     * @var \Slatman\EVerbinding\Type\PagingResponse $PagingResponse
     */
    public function __construct($Results, $PagingResponse)
    {
        $this->Results = $Results;
        $this->PagingResponse = $PagingResponse;
    }

    /**
     * @return \Slatman\EVerbinding\Type\ArrayOfDocument
     */
    public function getResults()
    {
        return $this->Results;
    }

    /**
     * @param \Slatman\EVerbinding\Type\ArrayOfDocument $Results
     * @return GetDocumentsResponse
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
     * @return GetDocumentsResponse
     */
    public function withPagingResponse($PagingResponse)
    {
        $new = clone $this;
        $new->PagingResponse = $PagingResponse;

        return $new;
    }


}

