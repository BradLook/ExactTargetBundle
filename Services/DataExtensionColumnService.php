<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_DataExtension_Column;
use Hautelook\ExactTargetBundle\Model\DataExtensionColumn as DataExtensionColumnProperties;

class DataExtensionColumnService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_DataExtension_Column();

        $this->service->authStub = $this->client;

        $this->properties = new DataExtensionColumnProperties();
    }
}
 