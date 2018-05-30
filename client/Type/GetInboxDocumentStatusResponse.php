<?php

namespace Slatman\Type;

class GetInboxDocumentStatusResponse
{

    /**
     * @var \Slatman\Type\StatusDetails
     */
    private $Details;

    /**
     * @return \Slatman\Type\StatusDetails
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param \Slatman\Type\StatusDetails $Details
     * @return GetInboxDocumentStatusResponse
     */
    public function withDetails($Details)
    {
        $new = clone $this;
        $new->Details = $Details;

        return $new;
    }


}

