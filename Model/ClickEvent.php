<?php

namespace Hautelook\ExactTargetBundle\Model;


class ClickEvent extends AbstractProperties
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
        'BatchID',
        'URLID',
        'URL'
    );

}
 