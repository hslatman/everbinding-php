<?php

namespace Slatman\Type;

class GetInboxDocumentStatus
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
     * @return GetInboxDocumentStatus
     */
    public function withExternalId($ExternalId)
    {
        $new = clone $this;
        $new->ExternalId = $ExternalId;

        return $new;
    }


}

