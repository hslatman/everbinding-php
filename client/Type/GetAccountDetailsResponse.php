<?php

namespace Slatman\Type;

class GetAccountDetailsResponse
{

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $EmailAddress;

    /**
     * @var string
     */
    private $FaxNumber;

    /**
     * @var string
     */
    private $PhoneNumber;

    /**
     * @var string
     */
    private $Website;

    /**
     * @var bool
     */
    private $CanSendAppIntegrationRequests;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return GetAccountDetailsResponse
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

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
     * @return GetAccountDetailsResponse
     */
    public function withEmailAddress($EmailAddress)
    {
        $new = clone $this;
        $new->EmailAddress = $EmailAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }

    /**
     * @param string $FaxNumber
     * @return GetAccountDetailsResponse
     */
    public function withFaxNumber($FaxNumber)
    {
        $new = clone $this;
        $new->FaxNumber = $FaxNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return GetAccountDetailsResponse
     */
    public function withPhoneNumber($PhoneNumber)
    {
        $new = clone $this;
        $new->PhoneNumber = $PhoneNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param string $Website
     * @return GetAccountDetailsResponse
     */
    public function withWebsite($Website)
    {
        $new = clone $this;
        $new->Website = $Website;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCanSendAppIntegrationRequests()
    {
        return $this->CanSendAppIntegrationRequests;
    }

    /**
     * @param bool $CanSendAppIntegrationRequests
     * @return GetAccountDetailsResponse
     */
    public function withCanSendAppIntegrationRequests($CanSendAppIntegrationRequests)
    {
        $new = clone $this;
        $new->CanSendAppIntegrationRequests = $CanSendAppIntegrationRequests;

        return $new;
    }


}

