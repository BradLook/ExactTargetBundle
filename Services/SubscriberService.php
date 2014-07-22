<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_Subscriber;
use Hautelook\ExactTargetBundle\Model\Subscriber as SubscriberProperties;

class SubscriberService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_Subscriber();

        $this->service->authStub = $this->client;

        $this->properties = new SubscriberProperties();
    }
}
 