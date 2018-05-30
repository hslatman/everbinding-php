<?php

namespace Slatman\Type;

class GetOutboxDocumentResponse
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
     * @return GetOutboxDocumentResponse
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
     * @return GetOutboxDocumentResponse
     */
    public function withStatuses($Statuses)
    {
        $new = clone $this;
        $new->Statuses = $Statuses;

        return $new;
    }


}

