<?php

class ServiceLocator implements ArrayAccess
{
    protected $services = [];

    public function set($key, $service)
    {
        if (!array_key_exists($key, $this->services)) {
            $this->services[$key] = $service;
        }
    }

    public function get($key)
    {
        if (!array_key_exists($key, $this->services)) {
            return null;
        }

        if (is_callable($this->services[$key])) {
            return call_user_func_array($this->services[$key], [$this]);
        } else {
            return $this->services[$key];
        }
    }

    public function offsetExists($key)
    {
        return array_key_exists($key, $this->services);
    }

    public function offsetGet($key)
    {
        return $this->get($key);
    }

    public function offsetSet($key, $service)
    {
        $this->set($key, $service);
    }

    public function offsetUnset($key)
    {
        unset($this->services[$key]);
    }
}
