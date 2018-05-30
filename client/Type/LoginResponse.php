<?php

namespace Slatman\Type;

class LoginResponse
{

    /**
     * @var string
     */
    private $SecurityToken;

    /**
     * @return string
     */
    public function getSecurityToken()
    {
        return $this->SecurityToken;
    }

    /**
     * @param string $SecurityToken
     * @return LoginResponse
     */
    public function withSecurityToken($SecurityToken)
    {
        $new = clone $this;
        $new->SecurityToken = $SecurityToken;

        return $new;
    }


}

