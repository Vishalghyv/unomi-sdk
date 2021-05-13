<?php

namespace Dropsolid\UnomiSdkPhp\Model\Events;

/**
 * Class EventsSearchView
 *
 * @package Dropsolid\UnomiSdkPhp\Model\Events
 */
class EventsSearchView
{
    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $pageSize;

    /**
     * @var int
     */
    private $totalSize;

    /**
     * @var string
     */
    private $scrollIdentifier;

    /**
     * @var string
     */
    private $scrollTimeValidity;

    /**
     * @var string
     */
    private $totalSizeRelation;

    /**
     * @var EventsListdata
     */
    private $list;

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getTotalSize()
    {
        return $this->totalSize;
    }

    /**
     * @param int $totalSize
     */
    public function setTotalSize($totalSize)
    {
        $this->totalSize = $totalSize;
    }

    /**
     * @return string
     */
    public function getScrollIdentifier()
    {
        return $this->scrollIdentifier;
    }

    /**
     * @param string $scrollIdentifier
     */
    public function setScrollIdentifier($scrollIdentifier)
    {
        $this->scrollIdentifier = $scrollIdentifier;
    }

    /**
     * @return string
     */
    public function getScrollTimeValidity()
    {
        return $this->scrollTimeValidity;
    }

    /**
     * @param string $scrollTimeValidity
     */
    public function setScrollTimeValidity($scrollTimeValidity)
    {
        $this->scrollTimeValidity = $scrollTimeValidity;
    }

    /**
     * @return string
     */
    public function getTotalSizeRelation()
    {
        return $this->totalSizeRelation;
    }

    /**
     * @param string $totalSizeRelation
     */
    public function setTotalSizeRelation($totalSizeRelation)
    {
        $this->totalSizeRelation = $totalSizeRelation;
    }

    /**
     * @return EventsListdata
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param EventsListdata $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }
}
