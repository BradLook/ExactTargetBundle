<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_BounceEvent;
use Hautelook\ExactTargetBundle\Model\BounceEvent as BounceEventProperties;

class BounceEvent extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_BounceEvent();

        $this->service->authStub = $this->client;

        $this->properties = new BounceEventProperties();
    }
}
 