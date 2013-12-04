<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_List;
use Hautelook\ExactTargetBundle\Model\ListProperties;

class ListService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_List();

        $this->service->authStub = $this->client;

        $this->properties = new ListProperties();
    }
}
 