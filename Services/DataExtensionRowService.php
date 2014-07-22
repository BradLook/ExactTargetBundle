<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_DataExtension_Row;
use Hautelook\ExactTargetBundle\Model\DataExtensionRow as DataExtensionRowProperties;

class DataExtensionRowService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_DataExtension_Row();

        $this->service->authStub = $this->client;

        $this->properties = new DataExtensionRowProperties();
    }
}
 