<?php

namespace Hautelook\ExactTargetBundle\Model;

class AbstractProperties
{
    protected $getColumns = array();

    public function setData(array $data)
    {
        foreach ($data as $key => $value) {
            $property = lcfirst($key);
            if (property_exists($this, $property)) {
                $this->$property = $value;
            } else {
                throw new \Exception('Invalid property ' . $key . ' for ' . get_class($this));
            }
        }
    }

    public function checkGetColumns(array $columns)
    {
        if (empty($this->getColumns)) {
            return true;
        }

        foreach ($columns as $column) {
            if (!in_array($column, $this->getColumns)) {
                throw new \Exception('Invalid column ' . $column . ' for ' . get_class($this));
            }
        }
    }
}
 