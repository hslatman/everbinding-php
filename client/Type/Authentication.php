<?php

namespace Slatman\Type;

class Authentication
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
     * @return Authentication
     */
    public function withSecurityToken($SecurityToken)
    {
        $new = clone $this;
        $new->SecurityToken = $SecurityToken;

        return $new;
    }


}

