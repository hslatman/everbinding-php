<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetDocumentPdfResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\FileDocument
     */
    private $File;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\FileDocument $File
     */
    public function __construct($File)
    {
        $this->File = $File;
    }

    /**
     * @return \Slatman\EVerbinding\Type\FileDocument
     */
    public function getFile()
    {
        return $this->File;
    }

    /**
     * @param \Slatman\EVerbinding\Type\FileDocument $File
     * @return GetDocumentPdfResponse
     */
    public function withFile($File)
    {
        $new = clone $this;
        $new->File = $File;

        return $new;
    }


}

