<?php

namespace Hautelook\ExactTargetBundle\Model;


class Email extends AbstractProperties
{
    protected $getColumns = array(
        'ID',
        'PartnerKey',
        'CreatedDate',
        'ModifiedDate',
        'Client.ID',
        'Name',
        'Folder',
        'CategoryID',
        'HTMLBody',
        'TextBody',
        'Subject',
        'IsActive',
        'IsHTMLPaste',
        'ClonedFromID',
        'Status',
        'EmailType',
        'CharacterSet',
        'HasDynamicSubjectLine',
        'ContentCheckStatus',
        'Client.PartnerClientKey',
        'ContentAreas',
        'CustomerKey'
    );

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $categoryID;

    /**
     * @var string
     */
    private $HTMLBody;

    /**
     * @var string
     */
    private $textBody;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var boolean
     */
    private $isHTMLPaste;

    /**
     * @var string
     */
    private $emailType;

    /**
     * @var string
     */
    private $characterSet;

    /**
     * @var string
     */
    private $customerKey;

    /**
     * @param string $HTMLBody
     */
    public function setHTMLBody($HTMLBody)
    {
        $this->HTMLBody = $HTMLBody;
    }

    /**
     * @return string
     */
    public function getHTMLBody()
    {
        return $this->HTMLBody;
    }

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
     * @param string $characterSet
     */
    public function setCharacterSet($characterSet)
    {
        $this->characterSet = $characterSet;
    }

    /**
     * @return string
     */
    public function getCharacterSet()
    {
        return $this->characterSet;
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
     * @param string $emailType
     */
    public function setEmailType($emailType)
    {
        $this->emailType = $emailType;
    }

    /**
     * @return string
     */
    public function getEmailType()
    {
        return $this->emailType;
    }

    /**
     * @param boolean $isHTMLPaste
     */
    public function setIsHTMLPaste($isHTMLPaste)
    {
        $this->isHTMLPaste = $isHTMLPaste;
    }

    /**
     * @return boolean
     */
    public function getIsHTMLPaste()
    {
        return $this->isHTMLPaste;
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
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $textBody
     */
    public function setTextBody($textBody)
    {
        $this->textBody = $textBody;
    }

    /**
     * @return string
     */
    public function getTextBody()
    {
        return $this->textBody;
    }


}
 