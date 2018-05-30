<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAccountParties implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\SearchAccountParty
     */
    private $Search;

    /**
     * @var \Slatman\EVerbinding\Type\Paging
     */
    private $Paging;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\SearchAccountParty $Search
     * @var \Slatman\EVerbinding\Type\Paging $Paging
     */
    public function __construct($Search, $Paging)
    {
        $this->Search = $Search;
        $this->Paging = $Paging;
    }

    /**
     * @return \Slatman\EVerbinding\Type\SearchAccountParty
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * @param \Slatman\EVerbinding\Type\SearchAccountParty $Search
     * @return GetAccountParties
     */
    public function withSearch($Search)
    {
        $new = clone $this;
        $new->Search = $Search;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\Paging
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Paging $Paging
     * @return GetAccountParties
     */
    public function withPaging($Paging)
    {
        $new = clone $this;
        $new->Paging = $Paging;

        return $new;
    }


}

