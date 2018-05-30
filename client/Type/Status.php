<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Status implements RequestInterface
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Code;

    /**
     * Constructor
     *
     * @var string $Name
     * @var string $Code
     */
    public function __construct($Name, $Code)
    {
        $this->Name = $Name;
        $this->Code = $Code;
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
     * @return Status
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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return Status
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }


}

