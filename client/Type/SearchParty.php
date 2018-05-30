<?php

namespace Slatman\Type;

class SearchParty
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
     * @var string
     */
    private $Residence;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }

    /**
     * @param string $ReferenceId
     * @return SearchParty
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
     * @return SearchParty
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
     * @return SearchParty
     */
    public function withChamberNumber($ChamberNumber)
    {
        $new = clone $this;
        $new->ChamberNumber = $ChamberNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getResidence()
    {
        return $this->Residence;
    }

    /**
     * @param string $Residence
     * @return SearchParty
     */
    public function withResidence($Residence)
    {
        $new = clone $this;
        $new->Residence = $Residence;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return SearchParty
     */
    public function withCountryCode($CountryCode)
    {
        $new = clone $this;
        $new->CountryCode = $CountryCode;

        return $new;
    }


}

