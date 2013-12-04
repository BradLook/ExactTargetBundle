<?php

namespace Hautelook\ExactTargetBundle\Model;


class Subscriber extends AbstractProperties
{
    protected $getColumns = array(
        'ID',
        'PartnerKey',
        'CreatedDate',
        'Client.ID',
        'Client.PartnerClientKey',
        'EmailAddress',
        'SubscriberKey',
        'UnsubscribedDate',
        'Status',
        'EmailTypePreference'
    );

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $subscriberKey;

    /**
     * @var \DateTime
     */
    private $unsubscribeDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $emailTypePreference;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @var array
     */
    private $lists;

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailTypePreference
     */
    public function setEmailTypePreference($emailTypePreference)
    {
        $this->emailTypePreference = $emailTypePreference;
    }

    /**
     * @return string
     */
    public function getEmailTypePreference()
    {
        return $this->emailTypePreference;
    }

    /**
     * @param array $lists
     */
    public function setLists($lists)
    {
        $this->lists = $lists;
    }

    /**
     * @return array
     */
    public function getLists()
    {
        return $this->lists;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $subscriberKey
     */
    public function setSubscriberKey($subscriberKey)
    {
        $this->subscriberKey = $subscriberKey;
    }

    /**
     * @return string
     */
    public function getSubscriberKey()
    {
        return $this->subscriberKey;
    }

    /**
     * @param \DateTime $unsubscribeDate
     */
    public function setUnsubscribeDate($unsubscribeDate)
    {
        $this->unsubscribeDate = $unsubscribeDate;
    }

    /**
     * @return \DateTime
     */
    public function getUnsubscribeDate()
    {
        return $this->unsubscribeDate;
    }


}
 