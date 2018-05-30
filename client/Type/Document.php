<?php

namespace Slatman\Type;

class Document
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
     * @var \Slatman\Type\Status
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
     * @return string
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return Document
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
     * @return Document
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
     * @return Document
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
     * @return Document
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
     * @return Document
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
     * @return Document
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
     * @return Document
     */
    public function withReciever($Reciever)
    {
        $new = clone $this;
        $new->Reciever = $Reciever;

        return $new;
    }

    /**
     * @return \Slatman\Type\Status
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Slatman\Type\Status $Status
     * @return Document
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
     * @return Document
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
     * @return Document
     */
    public function withTransaction($Transaction)
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }


}

