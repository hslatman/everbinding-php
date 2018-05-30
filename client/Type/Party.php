<?php

namespace Slatman\Type;

class Party
{

    /**
     * @var string
     */
    private $ReferenceId;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $ChamberNumber;

    /**
     * @var \Slatman\Type\Address
     */
    private $Address;

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }

    /**
     * @param string $ReferenceId
     * @return Party
     */
    public function withReferenceId($ReferenceId)
    {
        $new = clone $this;
        $new->ReferenceId = $ReferenceId;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return Party
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getChamberNumber()
    {
        return $this->ChamberNumber;
    }

    /**
     * @param string $ChamberNumber
     * @return Party
     */
    public function withChamberNumber($ChamberNumber)
    {
        $new = clone $this;
        $new->ChamberNumber = $ChamberNumber;

        return $new;
    }

    /**
     * @return \Slatman\Type\Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param \Slatman\Type\Address $Address
     * @return Party
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }


}

