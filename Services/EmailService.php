<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_Email;
use Hautelook\ExactTargetBundle\Model\Email as EmailProperties;

class EmailService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_Email();

        $this->service->authStub = $this->client;

        $this->properties = new EmailProperties();
    }
}
 