<?php

namespace Slatman\Type;

class Recipient
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

