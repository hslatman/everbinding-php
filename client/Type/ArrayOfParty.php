<?php

namespace Slatman\Type;

class ArrayOfParty
{

    /**
     * @var \Slatman\Type\Party
     */
    private $Party;

    /**
     * @return \Slatman\Type\Party
     */
    public function getParty()
    {
        return $this->Party;
    }

    /**
     * @param \Slatman\Type\Party $Party
     * @return ArrayOfParty
     */
    public function withParty($Party)
    {
        $new = clone $this;
        $new->Party = $Party;

        return $new;
    }


}

