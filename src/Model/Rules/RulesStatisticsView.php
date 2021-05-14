<?php

namespace Dropsolid\UnomiSdkPhp\Model\Rules;

/**
 * Class RulesStatisticsView
 *
 * @package Dropsolid\UnomiSdkPhp\Model\Rules
 */
class RulesStatisticsView
{
    /**
     * @var string
     */
    private $itemType;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var string
     */
    private $itemId;

    /**
     * @var int
     */
    private $version;

    /**
     * @var int
     */
    private $executionCount;

    /**
     * @var int
     */
    private $localExecutionCount;

    /**
     * @var int
     */
    private $conditionsTime;

    /**
     * @var int
     */
    private $localConditionsTime;

    /**
     * @var int
     */
    private $actionsTime;

    /**
     * @var int
     */
    private $localActionsTime;

    /**
     * @var int
     */
    private $lastSyncDate;

    /**
     * @return string
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * @param string $itemType
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param string $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return int
     */
    public function getExecutionCount()
    {
        return $this->executionCount;
    }

    /**
     * @param int $executionCount
     */
    public function setExecutionCount($executionCount)
    {
        $this->executionCount = $executionCount;
    }

    /**
     * @return int
     */
    public function getLocalExecutionCount()
    {
        return $this->localExecutionCount;
    }

    /**
     * @param int $localExecutionCount
     */
    public function setLocalExecutionCount($localExecutionCount)
    {
        $this->localExecutionCount = $localExecutionCount;
    }

    /**
     * @return int
     */
    public function getConditionsTime()
    {
        return $this->conditionsTime;
    }

    /**
     * @param int $conditionsTime
     */
    public function setConditionsTime($conditionsTime)
    {
        $this->conditionsTime = $conditionsTime;
    }

    /**
     * @return int
     */
    public function getLocalConditionsTime()
    {
        return $this->localConditionsTime;
    }

    /**
     * @param int $localConditionsTime
     */
    public function setLocalConditionsTime($localConditionsTime)
    {
        $this->localConditionsTime = $localConditionsTime;
    }

    /**
     * @return int
     */
    public function getActionsTime()
    {
        return $this->actionsTime;
    }

    /**
     * @param int $actionsTime
     */
    public function setActionsTime($actionsTime)
    {
        $this->actionsTime = $actionsTime;
    }

    /**
     * @return int
     */
    public function getLocalActionsTime()
    {
        return $this->localActionsTime;
    }

    /**
     * @param int $localActionsTime
     */
    public function setLocalActionsTime($localActionsTime)
    {
        $this->localActionsTime = $localActionsTime;
    }

    /**
     * @return string
     */
    public function getLastSyncDate()
    {
        return $this->lastSyncDate;
    }

    /**
     * @param string $lastSyncDate
     */
    public function setLastSyncDate($lastSyncDate)
    {
        $this->lastSyncDate = $lastSyncDate;
    }
}
