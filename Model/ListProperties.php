<?php

namespace Hautelook\ExactTargetBundle\Model;


class ListProperties extends AbstractProperties
{
    protected $getColumns = array(
        'ID',
        'ObjectID',
        'PartnerKey',
        'CreatedDate',
        'ModifiedDate',
        'Client.ID',
        'Client.PartnerClientKey',
        'ListName',
        'Description',
        'Category',
        'Type',
        'CustomerKey',
        'ListClassification',
        'AutomatedEmail.ID'
    );

    /**
     * @var int
     */
    private $category;

    /**
     * @var string
     */
    private $customerKey;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $listName;

    /**
     * @var string
     */
    private $type;

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $customerKey
     */
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;
    }

    /**
     * @return string
     */
    public function getCustomerKey()
    {
        return $this->customerKey;
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
     * @param string $listName
     */
    public function setListName($listName)
    {
        $this->listName = $listName;
    }

    /**
     * @return string
     */
    public function getListName()
    {
        return $this->listName;
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
 