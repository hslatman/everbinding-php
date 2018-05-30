<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DocumentSearch implements RequestInterface
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
     * @var \Slatman\EVerbinding\Type\TimeSpanFilter
     */
    private $CreatedOn;

    /**
     * @var \Slatman\EVerbinding\Type\TimeSpanFilter
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
     * @var \Slatman\EVerbinding\Type\Status
     */
    private $Status;

    /**
     * @var \Slatman\EVerbinding\Type\Template
     */
    private $Template;

    /**
     * Constructor
     *
     * @var string $ExternalId
     * @var string $DocumentId
     * @var string $Subject
     * @var \Slatman\EVerbinding\Type\TimeSpanFilter $CreatedOn
     * @var \Slatman\EVerbinding\Type\TimeSpanFilter $ModifiedOn
     * @var \Slatman\EVerbinding\Type\DocumentParty $Sender
     * @var \Slatman\EVerbinding\Type\DocumentParty $Reciever
     * @var \Slatman\EVerbinding\Type\Status $Status
     * @var \Slatman\EVerbinding\Type\Template $Template
     */
    public function __construct($ExternalId, $DocumentId, $Subject, $CreatedOn, $ModifiedOn, $Sender, $Reciever, $Status, $Template)
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
     * @return \Slatman\EVerbinding\Type\TimeSpanFilter
     */
    public function getCreatedOn()
    {
        return $this->CreatedOn;
    }

    /**
     * @param \Slatman\EVerbinding\Type\TimeSpanFilter $CreatedOn
     * @return DocumentSearch
     */
    public function withCreatedOn($CreatedOn)
    {
        $new = clone $this;
        $new->CreatedOn = $CreatedOn;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\TimeSpanFilter
     */
    public function getModifiedOn()
    {
        return $this->ModifiedOn;
    }

    /**
     * @param \Slatman\EVerbinding\Type\TimeSpanFilter $ModifiedOn
     * @return DocumentSearch
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
     * @return DocumentSearch
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
     * @return DocumentSearch
     */
    public function withReciever($Reciever)
    {
        $new = clone $this;
        $new->Reciever = $Reciever;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Status
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Status $Status
     * @return DocumentSearch
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
     * @return DocumentSearch
     */
    public function withTemplate($Template)
    {
        $new = clone $this;
        $new->Template = $Template;

        return $new;
    }


}

