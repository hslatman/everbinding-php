<?php

namespace Slatman\Type;

class ArrayOfDocument
{

    /**
     * @var \Slatman\Type\Document
     */
    private $Document;

    /**
     * @return \Slatman\Type\Document
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param \Slatman\Type\Document $Document
     * @return ArrayOfDocument
     */
    public function withDocument($Document)
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }


}

