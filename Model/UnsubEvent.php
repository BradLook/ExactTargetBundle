<?php

namespace Hautelook\ExactTargetBundle\Model;


class UnsubEvent extends AbstractProperties
{
    protected $getColumns = array(
        'ID',
        'ObjectID',
        'PartnerKey',
        'CreatedDate',
        'ModifiedDate',
        'Client.ID',
        'SendID',
        'SubscriberKey',
        'EventDate',
        'EventType',
        'TriggeredSendDefinitionObjectID',
        'BatchID'
    );
}
 