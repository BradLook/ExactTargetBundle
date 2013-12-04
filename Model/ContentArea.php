<?php

namespace Hautelook\ExactTargetBundle\Model;


class ContentArea extends AbstractProperties
{
    protected $getColumns = array(
        'RowObjectID',
        'ObjectID',
        'ID',
        'CustomerKey',
        'Client.ID',
        'ModifiedDate',
        'CreatedDate',
        'CategoryID',
        'Name',
        'Layout',
        'IsDynamicContent',
        'Content',
        'IsSurvey',
        'IsBlank',
        'Key'
    );

    /**
     * @var string
     */
    private $customerKey;

    /**
     * @var int
     */
    private $categoryID;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;

    /**
     * @param int $categoryID
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
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
 