<?php

namespace Slatman\Type;

class GetDocument
{

    /**
     * @var string
     */
    private $DocumentId;

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

