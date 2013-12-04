<?php

namespace Hautelook\ExactTargetBundle\Model;


class SentEvent extends AbstractProperties
{
    protected $getColumns = array(
        'SendID',
        'SubscriberKey',
        'EventDate',
        'Client.ID',
        'EventType',
        'BatchID',
        'TriggeredSendDefinitionObjectID',
        'ListID',
        'PartnerKey',
        'SubscriberID'
    );
}
 