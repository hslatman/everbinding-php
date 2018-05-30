<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetParties implements RequestInterface
{

    /**
     * @var \Slatman\EVerbinding\Type\SearchParty
     */
    private $Search;

    /**
     * @var \Slatman\EVerbinding\Type\Paging
     */
    private $Paging;

    /**
     * Constructor
     *
     * @var \Slatman\EVerbinding\Type\SearchParty $Search
     * @var \Slatman\EVerbinding\Type\Paging $Paging
     */
    public function __construct($Search, $Paging)
    {
        $this->Search = $Search;
        $this->Paging = $Paging;
    }

    /**
     * @return \Slatman\EVerbinding\Type\SearchParty
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * @param \Slatman\EVerbinding\Type\SearchParty $Search
     * @return GetParties
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
     * @return GetParties
     */
    public function withPaging($Paging)
    {
        $new = clone $this;
        $new->Paging = $Paging;

        return $new;
    }


}

