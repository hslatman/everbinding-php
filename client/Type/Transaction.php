<?php

namespace Slatman\Type;

class Transaction
{

    /**
     * @var string
     */
    private $Endpoint;

    /**
     * @var string
     */
    private $MessageId;

    /**
     * @var \Slatman\Type\DeliveryMethod
     */
    private $DeliveryMethod;

    /**
     * @var string
     */
    private $SenderReferenceId;

    /**
     * @var string
     */
    private $ReceiverReferenceId;

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->Endpoint;
    }

    /**
     * @param string $Endpoint
     * @return Transaction
     */
    public function withEndpoint($Endpoint)
    {
        $new = clone $this;
        $new->Endpoint = $Endpoint;

        return $new;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }

    /**
     * @param string $MessageId
     * @return Transaction
     */
    public function withMessageId($MessageId)
    {
        $new = clone $this;
        $new->MessageId = $MessageId;

        return $new;
    }

    /**
     * @return \Slatman\Type\DeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->DeliveryMethod;
    }

    /**
     * @param \Slatman\Type\DeliveryMethod $DeliveryMethod
     * @return Transaction
     */
    public function withDeliveryMethod($DeliveryMethod)
    {
        $new = clone $this;
        $new->DeliveryMethod = $DeliveryMethod;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderReferenceId()
    {
        return $this->SenderReferenceId;
    }

    /**
     * @param string $SenderReferenceId
     * @return Transaction
     */
    public function withSenderReferenceId($SenderReferenceId)
    {
        $new = clone $this;
        $new->SenderReferenceId = $SenderReferenceId;

        return $new;
    }

    /**
     * @return string
     */
    public function getReceiverReferenceId()
    {
        return $this->ReceiverReferenceId;
    }

    /**
     * @param string $ReceiverReferenceId
     * @return Transaction
     */
    public function withReceiverReferenceId($ReceiverReferenceId)
    {
        $new = clone $this;
        $new->ReceiverReferenceId = $ReceiverReferenceId;

        return $new;
    }


}

