<?php

namespace App;

use Illuminate\Support\Facades\Blade;
use ReflectionClass;
use ReflectionProperty;

class Livewire
{
    function initialRender($class): string
    {
        $component = new $class;
        return Blade::render($component->render(), $this->getProperties($component));
    }

    /**
     * @throws \ReflectionException
     */
    function getProperties($component): array
    {
        $properties = [];

        $reflectedProperties = (new ReflectionClass($component))->getProperties(ReflectionProperty::IS_PUBLIC);

        foreach ($reflectedProperties as $property) {
            $properties[$property->getName()] = $property->getValue($component);
        }

        return $properties;
    }
}
