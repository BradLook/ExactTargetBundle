<?php

namespace Hautelook\ExactTargetBundle\Model;


class BounceEvent extends AbstractProperties
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
        'SMTPCode',
        'BounceCategory',
        'SMTPReason',
        'BounceType',
        'EventType',
        'TriggeredSendDefinitionObjectID',
        'BatchID'
    );
}
 