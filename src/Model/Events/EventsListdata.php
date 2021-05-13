<?php

namespace Dropsolid\UnomiSdkPhp\Model\Events;

/**
 * Class EventsSearchView
 *
 * @package Dropsolid\UnomiSdkPhp\Model\Events
 * @SuppressWarnings(PHPCPD)
 */
class EventsListdata
{

    /**
     * @var string
     */
    private $itemType;

    /**
     * @var string
     */
    private $itemId;

    /**
     * @var int
     */
    private $version;

    /**
     * @var string
     */
    private $properties;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var string
     */
    private $timeStamp;

    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var bool
     */
    private $persistent;

    /**
     * @var string
     */
    private $eventType;

    /**
     * @var string
     */
    private $profileId;

    /**
     * @var array
     */
    private $target;

    /**
     * @var array
     */
    private $source;

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
    public function getversion()
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setversion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param string $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
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
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * @param string $timeStamp
     */
    public function setTimeStamp($timeStamp)
    {
        $this->timeStamp = $timeStamp;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return bool
     */
    public function getPersistent()
    {
        return $this->persistent;
    }

    /**
     * @param bool $persistent
     */
    public function setPersistent($persistent)
    {
        $this->persistent = $persistent;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param string $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return string
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * @param string $profileId
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
    }

    /**
     * @return array
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param array $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return array
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param array $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }
}
