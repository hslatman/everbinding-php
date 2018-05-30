<?php

namespace Slatman\Type;

class GetDocuments
{

    /**
     * @var string
     */
    private $GroupId;

    /**
     * @var \Slatman\Type\Paging
     */
    private $Paging;

    /**
     * @var \Slatman\Type\DocumentSearch
     */
    private $Search;

    /**
     * @return string
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }

    /**
     * @param string $GroupId
     * @return GetDocuments
     */
    public function withGroupId($GroupId)
    {
        $new = clone $this;
        $new->GroupId = $GroupId;

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
     * @return GetDocuments
     */
    public function withPaging($Paging)
    {
        $new = clone $this;
        $new->Paging = $Paging;

        return $new;
    }

    /**
     * @return \Slatman\Type\DocumentSearch
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * @param \Slatman\Type\DocumentSearch $Search
     * @return GetDocuments
     */
    public function withSearch($Search)
    {
        $new = clone $this;
        $new->Search = $Search;

        return $new;
    }


}

