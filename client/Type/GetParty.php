<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetParty implements RequestInterface
{

    /**
     * @var string
     */
    private $ReferenceId;

    /**
     * Constructor
     *
     * @var string $ReferenceId
     */
    public function __construct($ReferenceId)
    {
        $this->ReferenceId = $ReferenceId;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }

    /**
     * @param string $ReferenceId
     * @return GetParty
     */
    public function withReferenceId($ReferenceId)
    {
        $new = clone $this;
        $new->ReferenceId = $ReferenceId;

        return $new;
    }


}

