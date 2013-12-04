<?php

namespace Hautelook\ExactTargetBundle\Model;


class Campaign extends AbstractProperties
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $campaignCode;

    /**
     * @var string
     */
    private $color;

    /**
     * @var boolean
     */
    private $favorite;

    /**
     * @param string $campaignCode
     */
    public function setCampaignCode($campaignCode)
    {
        $this->campaignCode = $campaignCode;
    }

    /**
     * @return string
     */
    public function getCampaignCode()
    {
        return $this->campaignCode;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param boolean $favorite
     */
    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;
    }

    /**
     * @return boolean
     */
    public function getFavorite()
    {
        return $this->favorite;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


}
 