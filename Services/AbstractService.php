<?php

namespace Hautelook\ExactTargetBundle\Services;

use ET_Client;
use Hautelook\ExactTargetBundle\Model\AbstractProperties;

class AbstractService {
    protected $client;

    protected $service;

    /**
     * @var AbstractProperties
     */
    protected $properties;

    public function __construct($appSignature, $clientId, $clientSecret, $defaultWsdl)
    {
        $this->client = new ET_Client(
            false,
            false,
            array(
                'appsignature' => $appSignature,
                'clientid' =>$clientId,
                'clientsecret' => $clientSecret,
                'defaultwsdl' => $defaultWsdl
            )
        );
    }

    public function get(array $props = array())
    {
        if (!method_exists($this->service, 'get')) {
            return false;
        }

        if (!empty($props) && !$this->properties->checkGetColumns($props)) {
            return false;
        }

        $this->setProps($props);

        return($this->service->get());
    }

    public function getMore(array $props = array())
    {
        if (!method_exists($this->service, 'getMoreResults')) {
            return false;
        }

        if (!empty($props) && !$this->properties->checkGetColumns($props)) {
            return false;
        }

        $this->setProps($props);

        return($this->service->getMoreResults());
    }

    public function post(array $props)
    {
        if (!method_exists($this->service, 'post')) {
            return false;
        }

        if (!empty($props) && !$this->properties->checkGetColumns($props)) {
            return false;
        }

        $this->setProps($props);

        return($this->service->post());
    }

    public function put(array $props)
    {
        if (!method_exists($this->service, 'put')) {
            return false;
        }

        if (!empty($props) && !$this->properties->checkGetColumns($props)) {
            return false;
        }

        $this->setProps($props);

        return($this->service->put());
    }

    public function patch(array $props)
    {
        if (!method_exists($this->service, 'patch')) {
            return false;
        }

        if (!empty($props) && !$this->properties->checkGetColumns($props)) {
            return false;
        }

        $this->setProps($props);

        return($this->service->patch());
    }

    public function delete(array $props)
    {
        if (!method_exists($this->service, 'delete')) {
            return false;
        }

        if (!empty($props) && !$this->properties->checkGetColumns($props)) {
            return false;
        }

        $this->setProps($props);

        return($this->service->delete());
    }

    protected function setProps(array $props)
    {
        $this->properties->setData($props);

        if (!empty($props)) {
            $this->service->props = $props;
        }
    }

}
 