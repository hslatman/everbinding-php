<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Recipient implements RequestInterface
{

    /**
     * @var string
     */
    private $ReferenceId;

    /**
     * @var string
     */
    private $EmailAddress;

    /**
     * Constructor
     *
     * @var string $ReferenceId
     * @var string $EmailAddress
     */
    public function __construct($ReferenceId, $EmailAddress)
    {
        $this->ReferenceId = $ReferenceId;
        $this->EmailAddress = $EmailAddress;
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
     * @return Recipient
     */
    public function withReferenceId($ReferenceId)
    {
        $new = clone $this;
        $new->ReferenceId = $ReferenceId;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return Recipient
     */
    public function withEmailAddress($EmailAddress)
    {
        $new = clone $this;
        $new->EmailAddress = $EmailAddress;

        return $new;
    }


}

