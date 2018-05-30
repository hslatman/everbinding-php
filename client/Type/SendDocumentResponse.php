<?php

namespace Slatman\Type;

class SendDocumentResponse
{

    /**
     * @var string
     */
    private $ExternalId;

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return SendDocumentResponse
     */
    public function withExternalId($ExternalId)
    {
        $new = clone $this;
        $new->ExternalId = $ExternalId;

        return $new;
    }


}

