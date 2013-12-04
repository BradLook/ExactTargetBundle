<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_Campaign;
use Hautelook\ExactTargetBundle\Model\Campaign as CampaignProperties;

class Campaign extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_Campaign();

        $this->service->authStub = $this->client;

        $this->properties = new CampaignProperties();
    }
}
 