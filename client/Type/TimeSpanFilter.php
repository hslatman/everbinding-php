<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TimeSpanFilter implements RequestInterface
{

    /**
     * @var \DateTime
     */
    private $To;

    /**
     * @var \DateTime
     */
    private $From;

    /**
     * Constructor
     *
     * @var \DateTime $To
     * @var \DateTime $From
     */
    public function __construct($To, $From)
    {
        $this->To = $To;
        $this->From = $From;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->To;
    }

    /**
     * @param \DateTime $To
     * @return TimeSpanFilter
     */
    public function withTo($To)
    {
        $new = clone $this;
        $new->To = $To;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param \DateTime $From
     * @return TimeSpanFilter
     */
    public function withFrom($From)
    {
        $new = clone $this;
        $new->From = $From;

        return $new;
    }


}

