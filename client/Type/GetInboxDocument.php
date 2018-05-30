<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetInboxDocument implements RequestInterface
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
     * @return GetInboxDocument
     */
    public function withExternalId($ExternalId)
    {
        $new = clone $this;
        $new->ExternalId = $ExternalId;

        return $new;
    }


}

