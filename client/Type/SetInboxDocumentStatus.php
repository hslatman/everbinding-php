<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetInboxDocumentStatus implements RequestInterface
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
     * Constructor
     *
     * @var string $ExternalId
     * @var string $StatusCode
     */
    public function __construct($ExternalId, $StatusCode)
    {
        $this->ExternalId = $ExternalId;
        $this->StatusCode = $StatusCode;
    }

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

