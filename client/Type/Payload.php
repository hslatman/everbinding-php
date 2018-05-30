<?php

namespace Slatman\Type;

class Payload
{

    /**
     * @var \Slatman\Type\<anyXML>
     */
    private $any;

    /**
     * @return \Slatman\Type\<anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param \Slatman\Type\<anyXML> $any
     * @return Payload
     */
    public function withAny($any)
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }


}

