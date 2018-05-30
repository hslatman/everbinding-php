<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Paging implements RequestInterface
{

    /**
     * @var int
     */
    private $Limit;

    /**
     * @var string
     */
    private $StartPage;

    /**
     * Constructor
     *
     * @var int $Limit
     * @var string $StartPage
     */
    public function __construct($Limit, $StartPage)
    {
        $this->Limit = $Limit;
        $this->StartPage = $StartPage;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * @param int $Limit
     * @return Paging
     */
    public function withLimit($Limit)
    {
        $new = clone $this;
        $new->Limit = $Limit;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartPage()
    {
        return $this->StartPage;
    }

    /**
     * @param string $StartPage
     * @return Paging
     */
    public function withStartPage($StartPage)
    {
        $new = clone $this;
        $new->StartPage = $StartPage;

        return $new;
    }


}

