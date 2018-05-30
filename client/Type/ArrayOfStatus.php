<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfStatus implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\Status
     */
    private $Status;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\Status $Status
     */
    public function __construct($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Status
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Status $Status
     * @return ArrayOfStatus
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }


}

