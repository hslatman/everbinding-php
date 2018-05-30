<?php

namespace Slatman\Type;

class DocumentDetails
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
     * @var \Slatman\Type\DocumentParty
     */
    private $Sender;

    /**
     * @var \Slatman\Type\DocumentParty
     */
    private $Reciever;

    /**
     * @var \Slatman\Type\StatusDetails
     */
    private $Status;

    /**
     * @var \Slatman\Type\Template
     */
    private $Template;

    /**
     * @var \Slatman\Type\Transaction
     */
    private $Transaction;

    /**
     * @var \Slatman\Type\Payload
     */
    private $Payload;

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
     * @return \Slatman\Type\DocumentParty
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * @param \Slatman\Type\DocumentParty $Sender
     * @return DocumentDetails
     */
    public function withSender($Sender)
    {
        $new = clone $this;
        $new->Sender = $Sender;

        return $new;
    }

    /**
     * @return \Slatman\Type\DocumentParty
     */
    public function getReciever()
    {
        return $this->Reciever;
    }

    /**
     * @param \Slatman\Type\DocumentParty $Reciever
     * @return DocumentDetails
     */
    public function withReciever($Reciever)
    {
        $new = clone $this;
        $new->Reciever = $Reciever;

        return $new;
    }

    /**
     * @return \Slatman\Type\StatusDetails
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Slatman\Type\StatusDetails $Status
     * @return DocumentDetails
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Slatman\Type\Template
     */
    public function getTemplate()
    {
        return $this->Template;
    }

    /**
     * @param \Slatman\Type\Template $Template
     * @return DocumentDetails
     */
    public function withTemplate($Template)
    {
        $new = clone $this;
        $new->Template = $Template;

        return $new;
    }

    /**
     * @return \Slatman\Type\Transaction
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }

    /**
     * @param \Slatman\Type\Transaction $Transaction
     * @return DocumentDetails
     */
    public function withTransaction($Transaction)
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }

    /**
     * @return \Slatman\Type\Payload
     */
    public function getPayload()
    {
        return $this->Payload;
    }

    /**
     * @param \Slatman\Type\Payload $Payload
     * @return DocumentDetails
     */
    public function withPayload($Payload)
    {
        $new = clone $this;
        $new->Payload = $Payload;

        return $new;
    }


}

