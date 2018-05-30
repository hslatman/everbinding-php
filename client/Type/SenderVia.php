<?php

namespace Slatman\Type;

class SenderVia
{

    /**
     * @var string
     */
    private $ReferenceId;

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }

    /**
     * @param string $ReferenceId
     * @return SenderVia
     */
    public function withReferenceId($ReferenceId)
    {
        $new = clone $this;
        $new->ReferenceId = $ReferenceId;

        return $new;
    }


}

