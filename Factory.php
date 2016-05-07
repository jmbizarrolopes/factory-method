<?php
namespace Seshat\Component\Creation;

abstract class Factory
{

    protected abstract function factoryMethod();

    public function startFactory()
    {
        return $this->factoryMethod();
    }
}
