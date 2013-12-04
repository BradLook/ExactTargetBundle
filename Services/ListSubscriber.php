<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_List_Subscriber;
use Hautelook\ExactTargetBundle\Model\ListSubscriber as ListSubscriberProperties;

class ListSubscriber extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_List_Subscriber();

        $this->service->authStub = $this->client;

        $this->properties = new ListSubscriberProperties();
    }
}
 