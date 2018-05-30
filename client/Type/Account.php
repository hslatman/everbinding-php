<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Account implements RequestInterface
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
     * Constructor
     *
     * @var string $Id
     * @var string $Name
     */
    public function __construct($Id, $Name)
    {
        $this->Id = $Id;
        $this->Name = $Name;
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
     * @return Account
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
     * @return Account
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

