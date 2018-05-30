<?php

namespace Slatman\Type;

class PartyAccountDetails
{

    /**
     * @var string
     */
    private $Description;

    /**
     * @var \Slatman\Type\Account
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
     * @return \Slatman\Type\Account
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param \Slatman\Type\Account $Account
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

