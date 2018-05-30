<?php

namespace Slatman\Type;

class GetInboxDocuments
{

    /**
     * @var string
     */
    private $GroupId;

    /**
     * @var string
     */
    private $EConnectPartyId;

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
     * @return GetInboxDocuments
     */
    public function withGroupId($GroupId)
    {
        $new = clone $this;
        $new->GroupId = $GroupId;

        return $new;
    }

    /**
     * @return string
     */
    public function getEConnectPartyId()
    {
        return $this->EConnectPartyId;
    }

    /**
     * @param string $EConnectPartyId
     * @return GetInboxDocuments
     */
    public function withEConnectPartyId($EConnectPartyId)
    {
        $new = clone $this;
        $new->EConnectPartyId = $EConnectPartyId;

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
     * @return GetInboxDocuments
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
     * @return GetInboxDocuments
     */
    public function withSearch($Search)
    {
        $new = clone $this;
        $new->Search = $Search;

        return $new;
    }


}

