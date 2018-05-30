<?php

namespace Slatman\Type;

class GetOutboxDocumentsResponse
{

    /**
     * @var \Slatman\Type\ArrayOfDocument
     */
    private $Results;

    /**
     * @var \Slatman\Type\PagingResponse
     */
    private $PagingResponse;

    /**
     * @return \Slatman\Type\ArrayOfDocument
     */
    public function getResults()
    {
        return $this->Results;
    }

    /**
     * @param \Slatman\Type\ArrayOfDocument $Results
     * @return GetOutboxDocumentsResponse
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
     * @return GetOutboxDocumentsResponse
     */
    public function withPagingResponse($PagingResponse)
    {
        $new = clone $this;
        $new->PagingResponse = $PagingResponse;

        return $new;
    }


}

