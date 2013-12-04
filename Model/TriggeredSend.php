<?php

namespace Hautelook\ExactTargetBundle\Model;


class TriggeredSend extends AbstractProperties
{
    protected $getColumns = array(
        'ObjectID',
        'PartnerKey',
        'CreatedDate',
        'ModifiedDate',
        'Client.ID',
        'CustomerKey',
        'Email.ID',
        'List.ID',
        'Name',
        'Description',
        'TriggeredSendType',
        'TriggeredSendStatus',
        'HeaderContentArea.ID',
        'FooterContentArea.ID',
        'SendClassification.ObjectID',
        'SendClassification.CustomerKey',
        'SenderProfile.CustomerKey',
        'SenderProfile.ObjectID',
        'DeliveryProfile.CustomerKey',
        'DeliveryProfile.ObjectID',
        'PrivateDomain.ObjectID',
        'PrivateIP.ID',
        'AutoAddSubscribers',
        'AutoUpdateSubscribers',
        'BatchInterval',
        'FromName',
        'FromAddress',
        'BccEmail',
        'EmailSubject',
        'DynamicEmailSubject',
        'IsMultipart',
        'IsWrapped',
        'TestEmailAddr',
        'AllowedSlots',
        'NewSlotTrigger',
        'SendLimit',
        'SendWindowOpen',
        'SendWindowClose',
        'SuppressTracking',
        'Keyword',
        'List.PartnerKey',
        'Email.PartnerKey',
        'SendClassification.PartnerKey',
        'PrivateDomain.PartnerKey',
        'PrivateIP.PartnerKey',
        'Client.PartnerClientKey',
        'IsPlatformObject',
        'CategoryID'
    );

    /**
     * @var string
     */
    private $customerKey;

    /**
     * @var array
     */
    private $email;

    /**
     * @var array
     */
    private $list;

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
    private $triggeredSendStatus;

    /**
     * @var array
     */
    private $sendClassification;

    /**
     * @var array
     */
    private $senderProfile;

    /**
     * @var array
     */
    private $deliveryProfile;

    /**
     * @var boolean
     */
    private $autoAddSubscribers;

    /**
     * @var boolean
     */
    private $autoUpdateSubscribers;

    /**
     * @var string
     */
    private $cCEmail;

    /**
     * @var string
     */
    private $bccEmail;

    /**
     * @var string
     */
    private $emailSubject;

    /**
     * @var boolean
     */
    private $isMultipart;

    /**
     * @var boolean
     */
    private $isWrapped;

    /**
     * @var boolean
     */
    private $supressTracking;

    /**
     * @var int
     */
    private $categoryID;

    /**
     * @var boolean
     */
    private $refreshContent;

    /**
     * @var string
     */
    private $exclusionFilter;

    /**
     * @var string
     */
    private $priority;

    /**
     * @var array
     */
    private $sendSounceDataExtension;

    /**
     * @param boolean $autoAddSubscribers
     */
    public function setAutoAddSubscribers($autoAddSubscribers)
    {
        $this->autoAddSubscribers = $autoAddSubscribers;
    }

    /**
     * @return boolean
     */
    public function getAutoAddSubscribers()
    {
        return $this->autoAddSubscribers;
    }

    /**
     * @param boolean $autoUpdateSubscribers
     */
    public function setAutoUpdateSubscribers($autoUpdateSubscribers)
    {
        $this->autoUpdateSubscribers = $autoUpdateSubscribers;
    }

    /**
     * @return boolean
     */
    public function getAutoUpdateSubscribers()
    {
        return $this->autoUpdateSubscribers;
    }

    /**
     * @param string $bccEmail
     */
    public function setBccEmail($bccEmail)
    {
        $this->bccEmail = $bccEmail;
    }

    /**
     * @return string
     */
    public function getBccEmail()
    {
        return $this->bccEmail;
    }

    /**
     * @param string $cCEmail
     */
    public function setCCEmail($cCEmail)
    {
        $this->cCEmail = $cCEmail;
    }

    /**
     * @return string
     */
    public function getCCEmail()
    {
        return $this->cCEmail;
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
     * @param array $deliveryProfile
     */
    public function setDeliveryProfile($deliveryProfile)
    {
        $this->deliveryProfile = $deliveryProfile;
    }

    /**
     * @return array
     */
    public function getDeliveryProfile()
    {
        return $this->deliveryProfile;
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
     * @param array $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $emailSubject
     */
    public function setEmailSubject($emailSubject)
    {
        $this->emailSubject = $emailSubject;
    }

    /**
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->emailSubject;
    }

    /**
     * @param string $exclusionFilter
     */
    public function setExclusionFilter($exclusionFilter)
    {
        $this->exclusionFilter = $exclusionFilter;
    }

    /**
     * @return string
     */
    public function getExclusionFilter()
    {
        return $this->exclusionFilter;
    }

    /**
     * @param boolean $isMultipart
     */
    public function setIsMultipart($isMultipart)
    {
        $this->isMultipart = $isMultipart;
    }

    /**
     * @return boolean
     */
    public function getIsMultipart()
    {
        return $this->isMultipart;
    }

    /**
     * @param boolean $isWrapped
     */
    public function setIsWrapped($isWrapped)
    {
        $this->isWrapped = $isWrapped;
    }

    /**
     * @return boolean
     */
    public function getIsWrapped()
    {
        return $this->isWrapped;
    }

    /**
     * @param array $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }

    /**
     * @return array
     */
    public function getList()
    {
        return $this->list;
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
     * @param string $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param boolean $refreshContent
     */
    public function setRefreshContent($refreshContent)
    {
        $this->refreshContent = $refreshContent;
    }

    /**
     * @return boolean
     */
    public function getRefreshContent()
    {
        return $this->refreshContent;
    }

    /**
     * @param array $sendClassification
     */
    public function setSendClassification($sendClassification)
    {
        $this->sendClassification = $sendClassification;
    }

    /**
     * @return array
     */
    public function getSendClassification()
    {
        return $this->sendClassification;
    }

    /**
     * @param array $sendSounceDataExtension
     */
    public function setSendSounceDataExtension($sendSounceDataExtension)
    {
        $this->sendSounceDataExtension = $sendSounceDataExtension;
    }

    /**
     * @return array
     */
    public function getSendSounceDataExtension()
    {
        return $this->sendSounceDataExtension;
    }

    /**
     * @param array $senderProfile
     */
    public function setSenderProfile($senderProfile)
    {
        $this->senderProfile = $senderProfile;
    }

    /**
     * @return array
     */
    public function getSenderProfile()
    {
        return $this->senderProfile;
    }

    /**
     * @param boolean $supressTracking
     */
    public function setSupressTracking($supressTracking)
    {
        $this->supressTracking = $supressTracking;
    }

    /**
     * @return boolean
     */
    public function getSupressTracking()
    {
        return $this->supressTracking;
    }

    /**
     * @param string $triggeredSendStatus
     */
    public function setTriggeredSendStatus($triggeredSendStatus)
    {
        $this->triggeredSendStatus = $triggeredSendStatus;
    }

    /**
     * @return string
     */
    public function getTriggeredSendStatus()
    {
        return $this->triggeredSendStatus;
    }


}
 