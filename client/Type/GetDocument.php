<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDocument implements RequestInterface
{

    /**
     * @var string
     */
    private $DocumentId;

    /**
     * Constructor
     *
     * @var string $DocumentId
     */
    public function __construct($DocumentId)
    {
        $this->DocumentId = $DocumentId;
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * @param string $DocumentId
     * @return GetDocument
     */
    public function withDocumentId($DocumentId)
    {
        $new = clone $this;
        $new->DocumentId = $DocumentId;

        return $new;
    }


}

