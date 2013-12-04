<?php

namespace Hautelook\ExactTargetBundle\Model;


class DataExtensionColumn extends AbstractProperties
{
    protected $getColumns = array(
        'ObjectID',
        'PartnerKey',
        'Name',
        'DefaultValue',
        'MaxLength',
        'IsRequired',
        'Ordinal',
        'IsPrimaryKey',
        'FieldType',
        'CreatedDate',
        'ModifiedDate',
        'Scale',
        'Client.ID',
        'CustomerKey'
    );
}
 