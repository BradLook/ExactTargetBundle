<?php

namespace Hautelook\ExactTargetBundle\Model;


class ListSubscriber extends AbstractProperties
{
    protected $getColumns = array(
        'ObjectID',
        'SubscriberKey',
        'CreatedDate',
        'ModifiedDate',
        'Client.ID',
        'Client.PartnerClientKey',
        'ListID',
        'Status',
        'UnsubscribedDate',
        'ID'
    );
}
 