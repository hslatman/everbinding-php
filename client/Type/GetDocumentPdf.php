<?php

namespace Slatman\Type;

class GetDocumentPdf
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
     * @return GetDocumentPdf
     */
    public function withExternalId($ExternalId)
    {
        $new = clone $this;
        $new->ExternalId = $ExternalId;

        return $new;
    }


}

