<?php

namespace Hautelook\ExactTargetBundle\Model;


class OpenEvent extends AbstractProperties
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
 