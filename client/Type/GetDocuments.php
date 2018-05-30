<?php

namespace Slatman\EVerbinding\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDocuments implements RequestInterface
{

    /**
     * @var string
     */
    private $GroupId;

    /**
     * @var \Slatman\EVerbinding\Type\Paging
     */
    private $Paging;

    /**
     * @var \Slatman\EVerbinding\Type\DocumentSearch
     */
    private $Search;

    /**
     * Constructor
     *
     * @var string $GroupId
     * @var \Slatman\EVerbinding\Type\Paging $Paging
     * @var \Slatman\EVerbinding\Type\DocumentSearch $Search
     */
    public function __construct($GroupId, $Paging, $Search)
    {
        $this->GroupId = $GroupId;
        $this->Paging = $Paging;
        $this->Search = $Search;
    }

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
     * @return \Slatman\EVerbinding\Type\Paging
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param \Slatman\EVerbinding\Type\Paging $Paging
     * @return GetDocuments
     */
    public function withPaging($Paging)
    {
        $new = clone $this;
        $new->Paging = $Paging;

        return $new;
    }

    /**
     * @return \Slatman\EVerbinding\Type\DocumentSearch
     */
    public function getSearch()
    {
        return $this->Search;
    }

    /**
     * @param \Slatman\EVerbinding\Type\DocumentSearch $Search
     * @return GetDocuments
     */
    public function withSearch($Search)
    {
        $new = clone $this;
        $new->Search = $Search;

        return $new;
    }


}

