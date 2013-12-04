<?php

namespace Hautelook\ExactTargetBundle\Model;


class Folder extends AbstractProperties
{
    protected $getColumns = array(
        'ID',
        'Client.ID',
        'ParentFolder.ID',
        'ParentFolder.CustomerKey',
        'ParentFolder.ObjectID',
        'ParentFolder.Name',
        'ParentFolder.Description',
        'ParentFolder.ContentType',
        'ParentFolder.IsActive',
        'ParentFolder.IsEditable',
        'ParentFolder.AllowChildren',
        'Name',
        'Description',
        'ContentType',
        'IsActive',
        'IsEditable',
        'AllowChildren',
        'CreatedDate',
        'ModifiedDate',
        'Client.ModifiedBy',
        'ObjectID',
        'CustomerKey',
        'Client.EnterpriseID',
        'Client.CreatedBy'
    );

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
    private $contentType;

    /**
     * @var boolean
     */
    private $isEditable;

    /**
     * @var boolean
     */
    private $allowChildren;

    private $parentFolder;

    /**
     * @param boolean $allowChildren
     */
    public function setAllowChildren($allowChildren)
    {
        $this->allowChildren = $allowChildren;
    }

    /**
     * @return boolean
     */
    public function getAllowChildren()
    {
        return $this->allowChildren;
    }

    /**
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
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
     * @param boolean $isEditable
     */
    public function setIsEditable($isEditable)
    {
        $this->isEditable = $isEditable;
    }

    /**
     * @return boolean
     */
    public function getIsEditable()
    {
        return $this->isEditable;
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

    /**
     * @param mixed $parentFolder
     */
    public function setParentFolder($parentFolder)
    {
        $this->parentFolder = $parentFolder;
    }

    /**
     * @return mixed
     */
    public function getParentFolder()
    {
        return $this->parentFolder;
    }


}
 