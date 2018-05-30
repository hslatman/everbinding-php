<?php

namespace Slatman\Type;

class FileDocument
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

