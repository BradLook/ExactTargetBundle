<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_SentEvent;
use Hautelook\ExactTargetBundle\Model\SentEvent as SentEventProperties;

class SentEventService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_SentEvent();

        $this->service->authStub = $this->client;

        $this->properties = new SentEventProperties();
    }
}
 