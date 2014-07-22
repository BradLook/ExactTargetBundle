<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_Campaign_Asset;
use Hautelook\ExactTargetBundle\Model\CampaignAsset as CampaignAssetProperties;

class CampaignAssetService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_Campaign_Asset();

        $this->service->authStub = $this->client;

        $this->properties = new CampaignAssetProperties();
    }
}
 