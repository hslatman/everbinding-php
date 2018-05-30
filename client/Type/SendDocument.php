<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendDocument implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\SenderVia
     */
    private $Via;

    /**
     * @var \Slatman\EVerbinding\Type\Recipient
     */
    private $To;

    /**
     * @var string
     */
    private $Subject;

    /**
     * @var \Slatman\EVerbinding\Type\Payload
     */
    private $Payload;

    /**
     * @var string
     */
    private $TemplateId;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\SenderVia $Via
     * @var \Slatman\EVerbinding\Type\Recipient $To
     * @var string $Subject
     * @var \Slatman\EVerbinding\Type\Payload $Payload
     * @var string $TemplateId
     */
    public function __construct($Via, $To, $Subject, $Payload, $TemplateId)
    {
        $this->Via = $Via;
        $this->To = $To;
        $this->Subject = $Subject;
        $this->Payload = $Payload;
        $this->TemplateId = $TemplateId;
    }

    /**
     * @return \Slatman\EVerbinding\Type\SenderVia
     */
    public function getVia()
    {
        return $this->Via;
    }

    /**
     * @param \Slatman\EVerbinding\Type\SenderVia $Via
     * @return SendDocument
     */
    public function withVia($Via)
    {
        $new = clone $this;
        $new->Via = $Via;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Recipient
     */
    public function getTo()
    {
        return $this->To;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Recipient $To
     * @return SendDocument
     */
    public function withTo($To)
    {
        $new = clone $this;
        $new->To = $To;

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
     * @return SendDocument
     */
    public function withSubject($Subject)
    {
        $new = clone $this;
        $new->Subject = $Subject;

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
     * @return SendDocument
     */
    public function withPayload($Payload)
    {
        $new = clone $this;
        $new->Payload = $Payload;

        return $new;
    }

    /**
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * @param string $TemplateId
     * @return SendDocument
     */
    public function withTemplateId($TemplateId)
    {
        $new = clone $this;
        $new->TemplateId = $TemplateId;

        return $new;
    }


}

