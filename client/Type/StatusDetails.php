<?php

namespace Slatman\Type;

class StatusDetails
{

    /**
     * @var \Slatman\Type\StatusInfo
     */
    private $Info;

    /**
     * @return \Slatman\Type\StatusInfo
     */
    public function getInfo()
    {
        return $this->Info;
    }

    /**
     * @param \Slatman\Type\StatusInfo $Info
     * @return StatusDetails
     */
    public function withInfo($Info)
    {
        $new = clone $this;
        $new->Info = $Info;

        return $new;
    }


}

