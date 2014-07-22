<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_OpenEvent;
use Hautelook\ExactTargetBundle\Model\OpenEvent as OpenEventProperties;

class OpenEventService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_OpenEvent();

        $this->service->authStub = $this->client;

        $this->properties = new OpenEventProperties();
    }
}
 