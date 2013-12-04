<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_ClickEvent;
use Hautelook\ExactTargetBundle\Model\ClickEvent as ClickEventProperties;

class ClickEvent extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_ClickEvent();

        $this->service->authStub = $this->client;

        $this->properties = new ClickEventProperties();
    }
}
 