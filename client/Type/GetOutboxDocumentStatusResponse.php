<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetOutboxDocumentStatusResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\StatusDetails
     */
    private $Details;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\StatusDetails $Details
     */
    public function __construct($Details)
    {
        $this->Details = $Details;
    }

    /**
     * @return \Slatman\EVerbinding\Type\StatusDetails
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param \Slatman\EVerbinding\Type\StatusDetails $Details
     * @return GetOutboxDocumentStatusResponse
     */
    public function withDetails($Details)
    {
        $new = clone $this;
        $new->Details = $Details;

        return $new;
    }


}

