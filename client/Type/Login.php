<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Login implements RequestInterface
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
     * Constructor
     *
     * @var string $ConsumerKey
     * @var string $ConsumerSecret
     */
    public function __construct($ConsumerKey, $ConsumerSecret)
    {
        $this->ConsumerKey = $ConsumerKey;
        $this->ConsumerSecret = $ConsumerSecret;
    }

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

