<?php

namespace Slatman\Type;

class SetInboxDocumentStatus
{

    /**
     * @var string
     */
    private $ExternalId;

    /**
     * @var string
     */
    private $StatusCode;

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return SetInboxDocumentStatus
     */
    public function withExternalId($ExternalId)
    {
        $new = clone $this;
        $new->ExternalId = $ExternalId;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param string $StatusCode
     * @return SetInboxDocumentStatus
     */
    public function withStatusCode($StatusCode)
    {
        $new = clone $this;
        $new->StatusCode = $StatusCode;

        return $new;
    }


}

