<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FileDocument implements RequestInterface
{

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Contents;

    /**
     * Constructor
     *
     * @var string $Name
     * @var string $Contents
     */
    public function __construct($Name, $Contents)
    {
        $this->Name = $Name;
        $this->Contents = $Contents;
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
     * @return FileDocument
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
    public function getContents()
    {
        return $this->Contents;
    }

    /**
     * @param string $Contents
     * @return FileDocument
     */
    public function withContents($Contents)
    {
        $new = clone $this;
        $new->Contents = $Contents;

        return $new;
    }


}

