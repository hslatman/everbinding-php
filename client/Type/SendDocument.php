<?php

namespace Slatman\Type;

class SendDocument
{

    /**
     * @var \Slatman\Type\SenderVia
     */
    private $Via;

    /**
     * @var \Slatman\Type\Recipient
     */
    private $To;

    /**
     * @var string
     */
    private $Subject;

    /**
     * @var \Slatman\Type\Payload
     */
    private $Payload;

    /**
     * @var string
     */
    private $TemplateId;

    /**
     * @return \Slatman\Type\SenderVia
     */
    public function getVia()
    {
        return $this->Via;
    }

    /**
     * @param \Slatman\Type\SenderVia $Via
     * @return SendDocument
     */
    public function withVia($Via)
    {
        $new = clone $this;
        $new->Via = $Via;

        return $new;
    }

    /**
     * @return \Slatman\Type\Recipient
     */
    public function getTo()
    {
        return $this->To;
    }

    /**
     * @param \Slatman\Type\Recipient $To
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
     * @return \Slatman\Type\Payload
     */
    public function getPayload()
    {
        return $this->Payload;
    }

    /**
     * @param \Slatman\Type\Payload $Payload
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

