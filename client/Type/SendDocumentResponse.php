<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class SendDocumentResponse implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $ExternalId;

    /**
     * Constructor
     *
     * @var string $ExternalId
     */
    public function __construct($ExternalId)
    {
        $this->ExternalId = $ExternalId;
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
     * @return SendDocumentResponse
     */
    public function withExternalId($ExternalId)
    {
        $new = clone $this;
        $new->ExternalId = $ExternalId;

        return $new;
    }


}

