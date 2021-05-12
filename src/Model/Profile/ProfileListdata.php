<?php

namespace Dropsolid\UnomiSdkPhp\Model\Profile;

/**
 * Class ProfileSearchView
 *
 * @package Dropsolid\UnomiSdkPhp\Model\Profile
 * @SuppressWarnings(PHPCPD)
 */
class ProfileListdata
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
    private $systemProperties;

    /**
     * @var string
     */
    private $segments;

    /**
     * @var string
     */
    private $mergedWith;

    /**
     * @var string
     */
    private $scores;

    /**
     * @var string
     */
    private $consents;

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
    public function getSystemProperties()
    {
        return $this->systemProperties;
    }

    /**
     * @param string $systemProperties
     */
    public function setSystemProperties($systemProperties)
    {
        $this->systemProperties = $systemProperties;
    }

    /**
     * @return string
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * @param string $segments
     */
    public function setSegments($segments)
    {
        $this->segments = $segments;
    }

    /**
     * @return string
     */
    public function getMergedWith()
    {
        return $this->mergedWith;
    }

    /**
     * @param string $mergedWith
     */
    public function setMergedWith($mergedWith)
    {
        $this->mergedWith = $mergedWith;
    }

    /**
     * @return string
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * @param string $scores
     */
    public function setScores($scores)
    {
        $this->scores = $scores;
    }

    /**
     * @return string
     */
    public function getConsents()
    {
        return $this->consents;
    }

    /**
     * @param string $consents
     */
    public function setConsents($consents)
    {
        $this->consents = $consents;
    }
}
