<?php

namespace Slatman\Type;

class GetAccountParties
{

    /**
     * @var \Slatman\Type\SearchAccountParty
     */
    private $Search;

    /**
     * @var \Slatman\Type\Paging
     */
    private $Paging;

    /**
     * @return \Slatman\Type\SearchAccountParty
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * @param \Slatman\Type\SearchAccountParty $Search
     * @return GetAccountParties
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
     * @return GetAccountParties
     */
    public function withPaging($Paging)
    {
        $new = clone $this;
        $new->Paging = $Paging;

        return $new;
    }


}

