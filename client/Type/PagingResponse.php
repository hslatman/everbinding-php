<?php

namespace Slatman\Type;

class PagingResponse
{

    /**
     * @var string
     */
    private $NextPage;

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

