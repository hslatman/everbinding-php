<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DocumentDetails implements RequestInterface
{

    /**
     * @var string
     */
    private $ExternalId;

    /**
     * @var string
     */
    private $DocumentId;

    /**
     * @var string
     */
    private $Subject;

    /**
     * @var \DateTime
     */
    private $CreatedOn;

    /**
     * @var \DateTime
     */
    private $ModifiedOn;

    /**
     * @var \Slatman\EVerbinding\Type\DocumentParty
     */
    private $Sender;

    /**
     * @var \Slatman\EVerbinding\Type\DocumentParty
     */
    private $Reciever;

    /**
     * @var \Slatman\EVerbinding\Type\StatusDetails
     */
    private $Status;

    /**
     * @var \Slatman\EVerbinding\Type\Template
     */
    private $Template;

    /**
     * @var \Slatman\EVerbinding\Type\Transaction
     */
    private $Transaction;

    /**
     * @var \Slatman\EVerbinding\Type\Payload
     */
    private $Payload;

    /**
     * Constructor
     *
     * @var string $ExternalId
     * @var string $DocumentId
     * @var string $Subject
     * @var \DateTime $CreatedOn
     * @var \DateTime $ModifiedOn
     * @var \Slatman\EVerbinding\Type\DocumentParty $Sender
     * @var \Slatman\EVerbinding\Type\DocumentParty $Reciever
     * @var \Slatman\EVerbinding\Type\StatusDetails $Status
     * @var \Slatman\EVerbinding\Type\Template $Template
     * @var \Slatman\EVerbinding\Type\Transaction $Transaction
     * @var \Slatman\EVerbinding\Type\Payload $Payload
     */
    public function __construct($ExternalId, $DocumentId, $Subject, $CreatedOn, $ModifiedOn, $Sender, $Reciever, $Status, $Template, $Transaction, $Payload)
    {
        $this->ExternalId = $ExternalId;
        $this->DocumentId = $DocumentId;
        $this->Subject = $Subject;
        $this->CreatedOn = $CreatedOn;
        $this->ModifiedOn = $ModifiedOn;
        $this->Sender = $Sender;
        $this->Reciever = $Reciever;
        $this->Status = $Status;
        $this->Template = $Template;
        $this->Transaction = $Transaction;
        $this->Payload = $Payload;
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
     * @return DocumentDetails
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
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * @param string $DocumentId
     * @return DocumentDetails
     */
    public function withDocumentId($DocumentId)
    {
        $new = clone $this;
        $new->DocumentId = $DocumentId;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return DocumentDetails
     */
    public function withSubject($Subject)
    {
        $new = clone $this;
        $new->Subject = $Subject;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->CreatedOn;
    }

    /**
     * @param \DateTime $CreatedOn
     * @return DocumentDetails
     */
    public function withCreatedOn($CreatedOn)
    {
        $new = clone $this;
        $new->CreatedOn = $CreatedOn;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedOn()
    {
        return $this->ModifiedOn;
    }

    /**
     * @param \DateTime $ModifiedOn
     * @return DocumentDetails
     */
    public function withModifiedOn($ModifiedOn)
    {
        $new = clone $this;
        $new->ModifiedOn = $ModifiedOn;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\DocumentParty
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * @param \Slatman\EVerbinding\Type\DocumentParty $Sender
     * @return DocumentDetails
     */
    public function withSender($Sender)
    {
        $new = clone $this;
        $new->Sender = $Sender;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\DocumentParty
     */
    public function getReciever()
    {
        return $this->Reciever;
    }

    /**
     * @param \Slatman\EVerbinding\Type\DocumentParty $Reciever
     * @return DocumentDetails
     */
    public function withReciever($Reciever)
    {
        $new = clone $this;
        $new->Reciever = $Reciever;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\StatusDetails
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Slatman\EVerbinding\Type\StatusDetails $Status
     * @return DocumentDetails
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Template
     */
    public function getTemplate()
    {
        return $this->Template;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Template $Template
     * @return DocumentDetails
     */
    public function withTemplate($Template)
    {
        $new = clone $this;
        $new->Template = $Template;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Transaction
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Transaction $Transaction
     * @return DocumentDetails
     */
    public function withTransaction($Transaction)
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Payload
     */
    public function getPayload()
    {
        return $this->Payload;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Payload $Payload
     * @return DocumentDetails
     */
    public function withPayload($Payload)
    {
        $new = clone $this;
        $new->Payload = $Payload;

        return $new;
    }


}

