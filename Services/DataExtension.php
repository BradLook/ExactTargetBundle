<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_DataExtension;
use Hautelook\ExactTargetBundle\Model\DataExtension as DataExtensionProperties;

class DataExtension extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_DataExtension();

        $this->service->authStub = $this->client;

        $this->properties = new DataExtensionProperties();
    }
}
 