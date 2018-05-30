<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class PagingResponse implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $NextPage;

    /**
     * Constructor
     *
     * @var string $NextPage
     */
    public function __construct($NextPage)
    {
        $this->NextPage = $NextPage;
    }

    /**
     * @return string
     */
    public function getNextPage()
    {
        return $this->NextPage;
    }

    /**
     * @param string $NextPage
     * @return PagingResponse
     */
    public function withNextPage($NextPage)
    {
        $new = clone $this;
        $new->NextPage = $NextPage;

        return $new;
    }


}

