<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfParty implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\Party
     */
    private $Party;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\Party $Party
     */
    public function __construct($Party)
    {
        $this->Party = $Party;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Party
     */
    public function getParty()
    {
        return $this->Party;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Party $Party
     * @return ArrayOfParty
     */
    public function withParty($Party)
    {
        $new = clone $this;
        $new->Party = $Party;

        return $new;
    }


}

