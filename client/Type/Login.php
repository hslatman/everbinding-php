<?php

namespace Slatman\Type;

class Login
{

    /**
     * @var string
     */
    private $ConsumerKey;

    /**
     * @var string
     */
    private $ConsumerSecret;

    /**
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->ConsumerKey;
    }

    /**
     * @param string $ConsumerKey
     * @return Login
     */
    public function withConsumerKey($ConsumerKey)
    {
        $new = clone $this;
        $new->ConsumerKey = $ConsumerKey;

        return $new;
    }

    /**
     * @return string
     */
    public function getConsumerSecret()
    {
        return $this->ConsumerSecret;
    }

    /**
     * @param string $ConsumerSecret
     * @return Login
     */
    public function withConsumerSecret($ConsumerSecret)
    {
        $new = clone $this;
        $new->ConsumerSecret = $ConsumerSecret;

        return $new;
    }


}

