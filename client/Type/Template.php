<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Template implements RequestInterface
{

    /**
     * @var string
     */
    private $Id;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $MasterId;

    /**
     * @var string
     */
    private $MasterName;

    /**
     * Constructor
     *
     * @var string $Id
     * @var string $Name
     * @var string $MasterId
     * @var string $MasterName
     */
    public function __construct($Id, $Name, $MasterId, $MasterName)
    {
        $this->Id = $Id;
        $this->Name = $Name;
        $this->MasterId = $MasterId;
        $this->MasterName = $MasterName;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return Template
     */
    public function withId($Id)
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return Template
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getMasterId()
    {
        return $this->MasterId;
    }

    /**
     * @param string $MasterId
     * @return Template
     */
    public function withMasterId($MasterId)
    {
        $new = clone $this;
        $new->MasterId = $MasterId;

        return $new;
    }

    /**
     * @return string
     */
    public function getMasterName()
    {
        return $this->MasterName;
    }

    /**
     * @param string $MasterName
     * @return Template
     */
    public function withMasterName($MasterName)
    {
        $new = clone $this;
        $new->MasterName = $MasterName;

        return $new;
    }


}

