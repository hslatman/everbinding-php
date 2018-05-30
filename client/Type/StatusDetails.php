<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StatusDetails implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\StatusInfo
     */
    private $Info;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\StatusInfo $Info
     */
    public function __construct($Info)
    {
        $this->Info = $Info;
    }

    /**
     * @return \Slatman\EVerbinding\Type\StatusInfo
     */
    public function getInfo()
    {
        return $this->Info;
    }

    /**
     * @param \Slatman\EVerbinding\Type\StatusInfo $Info
     * @return StatusDetails
     */
    public function withInfo($Info)
    {
        $new = clone $this;
        $new->Info = $Info;

        return $new;
    }


}

