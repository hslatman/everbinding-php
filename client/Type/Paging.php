<?php

namespace Slatman\Type;

class Paging
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

