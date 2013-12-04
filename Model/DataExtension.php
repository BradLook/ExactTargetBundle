<?php

namespace Hautelook\ExactTargetBundle\Model;


class DataExtension extends AbstractProperties
{
    protected $getColumns = array(
        'ObjectID',
        'PartnerKey',
        'CustomerKey',
        'Name',
        'CreatedDate',
        'ModifiedDate',
        'Client.ID',
        'Description',
        'IsSendable',
        'IsTestable',
        'SendableDataExtensionField.Name',
        'SendableSubscriberField.Name',
        'Template.CustomerKey',
        'CategoryID',
        'Status',
        'IsPlatformObject',
        'DataRetentionPeriodLength',
        'DataRetentionPeriodUnitOfMeasure',
        'RowBasedRetention',
        'ResetRetentionPeriodOnImport',
        'DeleteAtEndOfRetentionPeriod',
        'RetainUntil',
        'DataRetentionPeriod'
    );

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $defaultValue;

    /**
     * @var int
     */
    private $maxLength;

    /**
     * @var boolean
     */
    private $isRequired;

    /**
     * @var boolean
     */
    private $isPrimaryKey;

    /**
     * @var string
     */
    private $fieldType;

    /**
     * @param string $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param string $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * @param boolean $isPrimaryKey
     */
    public function setIsPrimaryKey($isPrimaryKey)
    {
        $this->isPrimaryKey = $isPrimaryKey;
    }

    /**
     * @return boolean
     */
    public function getIsPrimaryKey()
    {
        return $this->isPrimaryKey;
    }

    /**
     * @param boolean $isRequired
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
    }

    /**
     * @return boolean
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * @param int $maxLength
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->maxLength;
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
 