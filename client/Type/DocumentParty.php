<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DocumentParty implements RequestInterface
{

    /**
     * @var string
     */
    private $EConnectPartyId;

    /**
     * @var string
     */
    private $Name;

    /**
     * Constructor
     *
     * @var string $EConnectPartyId
     * @var string $Name
     */
    public function __construct($EConnectPartyId, $Name)
    {
        $this->EConnectPartyId = $EConnectPartyId;
        $this->Name = $Name;
    }

    /**
     * @return string
     */
    public function getEConnectPartyId()
    {
        return $this->EConnectPartyId;
    }

    /**
     * @param string $EConnectPartyId
     * @return DocumentParty
     */
    public function withEConnectPartyId($EConnectPartyId)
    {
        $new = clone $this;
        $new->EConnectPartyId = $EConnectPartyId;

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
     * @return DocumentParty
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

