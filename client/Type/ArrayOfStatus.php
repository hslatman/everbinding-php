<?php

namespace Slatman\Type;

class ArrayOfStatus
{

    /**
     * @var \Slatman\Type\Status
     */
    private $Status;

    /**
     * @return \Slatman\Type\Status
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Slatman\Type\Status $Status
     * @return ArrayOfStatus
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }


}

