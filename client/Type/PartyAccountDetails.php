<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PartyAccountDetails implements RequestInterface
{

    /**
     * @var string
     */
    private $Description;

    /**
     * @var \Slatman\EVerbinding\Type\Account
     */
    private $Account;

    /**
     * @var bool
     */
    private $IsRegisteredToPeppol;

    /**
     * @var bool
     */
    private $IsVerified;

    /**
     * Constructor
     *
     * @var string $Description
     * @var \Slatman\EVerbinding\Type\Account $Account
     * @var bool $IsRegisteredToPeppol
     * @var bool $IsVerified
     */
    public function __construct($Description, $Account, $IsRegisteredToPeppol, $IsVerified)
    {
        $this->Description = $Description;
        $this->Account = $Account;
        $this->IsRegisteredToPeppol = $IsRegisteredToPeppol;
        $this->IsVerified = $IsVerified;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return PartyAccountDetails
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Account
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Account $Account
     * @return PartyAccountDetails
     */
    public function withAccount($Account)
    {
        $new = clone $this;
        $new->Account = $Account;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsRegisteredToPeppol()
    {
        return $this->IsRegisteredToPeppol;
    }

    /**
     * @param bool $IsRegisteredToPeppol
     * @return PartyAccountDetails
     */
    public function withIsRegisteredToPeppol($IsRegisteredToPeppol)
    {
        $new = clone $this;
        $new->IsRegisteredToPeppol = $IsRegisteredToPeppol;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->IsVerified;
    }

    /**
     * @param bool $IsVerified
     * @return PartyAccountDetails
     */
    public function withIsVerified($IsVerified)
    {
        $new = clone $this;
        $new->IsVerified = $IsVerified;

        return $new;
    }


}

