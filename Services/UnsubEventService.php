<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_UnsubEvent;
use Hautelook\ExactTargetBundle\Model\UnsubEvent as UnsubEventProperties;

class UnsubEventService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_UnsubEvent();

        $this->service->authStub = $this->client;

        $this->properties = new UnsubEventProperties();
    }
}
 