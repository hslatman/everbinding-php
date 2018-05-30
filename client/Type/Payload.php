<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Payload implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\<anyXML>
     */
    private $any;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\<anyXML> $any
     */
    public function __construct($any)
    {
        $this->any = $any;
    }

    /**
     * @return \Slatman\EVerbinding\Type\<anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param \Slatman\EVerbinding\Type\<anyXML> $any
     * @return Payload
     */
    public function withAny($any)
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }


}

