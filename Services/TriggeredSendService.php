<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_TriggeredSend;
use Hautelook\ExactTargetBundle\Model\TriggeredSend as TriggeredSendProperties;

class TriggeredSendService extends AbstractService
{
    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        parent::__construct($appSignature, $clientId, $clientSecret, $defaultWsdl);

        $this->service = new ET_TriggeredSend();

        $this->service->authStub = $this->client;

        $this->properties = new TriggeredSendProperties();
    }

    public function send($props)
    {
        if (!method_exists($this->service, 'post')) {
            return false;
        }

        $this->setProps($props);

        return($this->service->Send());
    }
}
 