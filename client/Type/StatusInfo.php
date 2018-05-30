<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StatusInfo implements RequestInterface
{

    /**
     * @var string
     */
    private $UserId;

    /**
     * @var string
     */
    private $UserName;

    /**
     * @var string
     */
    private $AccountId;

    /**
     * @var string
     */
    private $AccountName;

    /**
     * @var \DateTime
     */
    private $ChangedOn;

    /**
     * Constructor
     *
     * @var string $UserId
     * @var string $UserName
     * @var string $AccountId
     * @var string $AccountName
     * @var \DateTime $ChangedOn
     */
    public function __construct($UserId, $UserName, $AccountId, $AccountName, $ChangedOn)
    {
        $this->UserId = $UserId;
        $this->UserName = $UserName;
        $this->AccountId = $AccountId;
        $this->AccountName = $AccountName;
        $this->ChangedOn = $ChangedOn;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param string $UserId
     * @return StatusInfo
     */
    public function withUserId($UserId)
    {
        $new = clone $this;
        $new->UserId = $UserId;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return StatusInfo
     */
    public function withUserName($UserName)
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param string $AccountId
     * @return StatusInfo
     */
    public function withAccountId($AccountId)
    {
        $new = clone $this;
        $new->AccountId = $AccountId;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return StatusInfo
     */
    public function withAccountName($AccountName)
    {
        $new = clone $this;
        $new->AccountName = $AccountName;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getChangedOn()
    {
        return $this->ChangedOn;
    }

    /**
     * @param \DateTime $ChangedOn
     * @return StatusInfo
     */
    public function withChangedOn($ChangedOn)
    {
        $new = clone $this;
        $new->ChangedOn = $ChangedOn;

        return $new;
    }


}

