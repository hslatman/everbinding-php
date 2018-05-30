<?php

namespace Slatman\Type;

class GetDocumentPdfResponse
{

    /**
     * @var \Slatman\Type\FileDocument
     */
    private $File;

    /**
     * @return \Slatman\Type\FileDocument
     */
    public function getFile()
    {
        return $this->File;
    }

    /**
     * @param \Slatman\Type\FileDocument $File
     * @return GetDocumentPdfResponse
     */
    public function withFile($File)
    {
        $new = clone $this;
        $new->File = $File;

        return $new;
    }


}

