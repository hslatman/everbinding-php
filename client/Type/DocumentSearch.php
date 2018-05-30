<?php

namespace Slatman\Type;

class DocumentSearch
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
     * @var \Slatman\Type\TimeSpanFilter
     */
    private $CreatedOn;

    /**
     * @var \Slatman\Type\TimeSpanFilter
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
     * @return string
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return DocumentSearch
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
     * @return DocumentSearch
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
     * @return DocumentSearch
     */
    public function withSubject($Subject)
    {
        $new = clone $this;
        $new->Subject = $Subject;

        return $new;
    }

    /**
     * @return \Slatman\Type\TimeSpanFilter
     */
    public function getCreatedOn()
    {
        return $this->CreatedOn;
    }

    /**
     * @param \Slatman\Type\TimeSpanFilter $CreatedOn
     * @return DocumentSearch
     */
    public function withCreatedOn($CreatedOn)
    {
        $new = clone $this;
        $new->CreatedOn = $CreatedOn;

        return $new;
    }

    /**
     * @return \Slatman\Type\TimeSpanFilter
     */
    public function getModifiedOn()
    {
        return $this->ModifiedOn;
    }

    /**
     * @param \Slatman\Type\TimeSpanFilter $ModifiedOn
     * @return DocumentSearch
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
     * @return DocumentSearch
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
     * @return DocumentSearch
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
     * @return DocumentSearch
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
     * @return DocumentSearch
     */
    public function withTemplate($Template)
    {
        $new = clone $this;
        $new->Template = $Template;

        return $new;
    }


}

