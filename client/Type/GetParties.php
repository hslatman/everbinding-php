<?php

namespace Slatman\Type;

class GetParties
{

    /**
     * @var \Slatman\Type\SearchParty
     */
    private $Search;

    /**
     * @var \Slatman\Type\Paging
     */
    private $Paging;

    /**
     * @return \Slatman\Type\SearchParty
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * @param \Slatman\Type\SearchParty $Search
     * @return GetParties
     */
    public function withSearch($Search)
    {
        $new = clone $this;
        $new->Search = $Search;

        return $new;
    }

    /**
     * @return \Slatman\Type\Paging
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param \Slatman\Type\Paging $Paging
     * @return GetParties
     */
    public function withPaging($Paging)
    {
        $new = clone $this;
        $new->Paging = $Paging;

        return $new;
    }


}

