<?php

namespace Slatman\Type;

class GetInboxDocumentResponse
{

    /**
     * @var \Slatman\Type\DocumentDetails
     */
    private $Details;

    /**
     * @var \Slatman\Type\ArrayOfStatus
     */
    private $Statuses;

    /**
     * @return \Slatman\Type\DocumentDetails
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param \Slatman\Type\DocumentDetails $Details
     * @return GetInboxDocumentResponse
     */
    public function withDetails($Details)
    {
        $new = clone $this;
        $new->Details = $Details;

        return $new;
    }

    /**
     * @return \Slatman\Type\ArrayOfStatus
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * @param \Slatman\Type\ArrayOfStatus $Statuses
     * @return GetInboxDocumentResponse
     */
    public function withStatuses($Statuses)
    {
        $new = clone $this;
        $new->Statuses = $Statuses;

        return $new;
    }


}

