<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_Folder;
use Hautelook\ExactTargetBundle\Model\Folder as FolderProperties;

class FolderService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_Folder();

        $this->service->authStub = $this->client;

        $this->properties = new FolderProperties();
    }
}
 