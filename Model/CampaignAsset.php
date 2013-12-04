<?php

namespace Hautelook\ExactTargetBundle\Model;


class CampaignAsset extends AbstractProperties
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string[]
     */
    private $ids;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \string[] $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }

    /**
     * @return \string[]
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
 