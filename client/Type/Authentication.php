<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Authentication implements RequestInterface
{

    /**
     * @var string
     */
    private $SecurityToken;

    /**
     * Constructor
     *
     * @var string $SecurityToken
     */
    public function __construct($SecurityToken)
    {
        $this->SecurityToken = $SecurityToken;
    }

    /**
     * @return string
     */
    public function getSecurityToken()
    {
        return $this->SecurityToken;
    }

    /**
     * @param string $SecurityToken
     * @return Authentication
     */
    public function withSecurityToken($SecurityToken)
    {
        $new = clone $this;
        $new->SecurityToken = $SecurityToken;

        return $new;
    }


}

