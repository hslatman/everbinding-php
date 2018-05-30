<?php

namespace Slatman\Type;

class SetInboxDocumentStatusResponse
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
     * @return SetInboxDocumentStatusResponse
     */
    public function withExternalId($ExternalId)
    {
        $new = clone $this;
        $new->ExternalId = $ExternalId;

        return $new;
    }


}

