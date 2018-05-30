<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Transaction implements RequestInterface
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
     * @var \Slatman\EVerbinding\Type\DeliveryMethod
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
     * Constructor
     *
     * @var string $Endpoint
     * @var string $MessageId
     * @var \Slatman\EVerbinding\Type\DeliveryMethod $DeliveryMethod
     * @var string $SenderReferenceId
     * @var string $ReceiverReferenceId
     */
    public function __construct($Endpoint, $MessageId, $DeliveryMethod, $SenderReferenceId, $ReceiverReferenceId)
    {
        $this->Endpoint = $Endpoint;
        $this->MessageId = $MessageId;
        $this->DeliveryMethod = $DeliveryMethod;
        $this->SenderReferenceId = $SenderReferenceId;
        $this->ReceiverReferenceId = $ReceiverReferenceId;
    }

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
     * @return \Slatman\EVerbinding\Type\DeliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->DeliveryMethod;
    }

    /**
     * @param \Slatman\EVerbinding\Type\DeliveryMethod $DeliveryMethod
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

