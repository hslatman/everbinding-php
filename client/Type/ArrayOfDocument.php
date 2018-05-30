<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfDocument implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\Document
     */
    private $Document;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\Document $Document
     */
    public function __construct($Document)
    {
        $this->Document = $Document;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Document
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Document $Document
     * @return ArrayOfDocument
     */
    public function withDocument($Document)
    {
        $new = clone $this;
        $new->Document = $Document;

        return $new;
    }


}

