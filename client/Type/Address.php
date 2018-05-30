<?php

namespace Slatman\Type;

class Address
{

    /**
     * @var string
     */
    private $EstablishmentNumber;

    /**
     * @var string
     */
    private $StreetName;

    /**
     * @var string
     */
    private $HouseNumber;

    /**
     * @var string
     */
    private $HouseNumberAddition;

    /**
     * @var string
     */
    private $PostalCode;

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
    public function getEstablishmentNumber()
    {
        return $this->EstablishmentNumber;
    }

    /**
     * @param string $EstablishmentNumber
     * @return Address
     */
    public function withEstablishmentNumber($EstablishmentNumber)
    {
        $new = clone $this;
        $new->EstablishmentNumber = $EstablishmentNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }

    /**
     * @param string $StreetName
     * @return Address
     */
    public function withStreetName($StreetName)
    {
        $new = clone $this;
        $new->StreetName = $StreetName;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }

    /**
     * @param string $HouseNumber
     * @return Address
     */
    public function withHouseNumber($HouseNumber)
    {
        $new = clone $this;
        $new->HouseNumber = $HouseNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouseNumberAddition()
    {
        return $this->HouseNumberAddition;
    }

    /**
     * @param string $HouseNumberAddition
     * @return Address
     */
    public function withHouseNumberAddition($HouseNumberAddition)
    {
        $new = clone $this;
        $new->HouseNumberAddition = $HouseNumberAddition;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return Address
     */
    public function withPostalCode($PostalCode)
    {
        $new = clone $this;
        $new->PostalCode = $PostalCode;

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
     * @return Address
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
     * @return Address
     */
    public function withCountryCode($CountryCode)
    {
        $new = clone $this;
        $new->CountryCode = $CountryCode;

        return $new;
    }


}

