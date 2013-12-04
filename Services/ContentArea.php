<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_ContentArea;
use Hautelook\ExactTargetBundle\Model\ContentArea as ContentAreaProperties;

class ListService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_ContentArea();

        $this->service->authStub = $this->client;

        $this->properties = new ContentAreaProperties();
    }
}
 