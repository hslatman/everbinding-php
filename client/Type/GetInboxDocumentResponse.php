<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetInboxDocumentResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\DocumentDetails
     */
    private $Details;

    /**
     * @var \Slatman\EVerbinding\Type\ArrayOfStatus
     */
    private $Statuses;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\DocumentDetails $Details
     * @var \Slatman\EVerbinding\Type\ArrayOfStatus $Statuses
     */
    public function __construct($Details, $Statuses)
    {
        $this->Details = $Details;
        $this->Statuses = $Statuses;
    }

    /**
     * @return \Slatman\EVerbinding\Type\DocumentDetails
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param \Slatman\EVerbinding\Type\DocumentDetails $Details
     * @return GetInboxDocumentResponse
     */
    public function withDetails($Details)
    {
        $new = clone $this;
        $new->Details = $Details;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\ArrayOfStatus
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * @param \Slatman\EVerbinding\Type\ArrayOfStatus $Statuses
     * @return GetInboxDocumentResponse
     */
    public function withStatuses($Statuses)
    {
        $new = clone $this;
        $new->Statuses = $Statuses;

        return $new;
    }


}

