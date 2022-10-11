<?php
/*
 * This file is a part of the phpapis/VKPHP project.
 *
 * Copyright (c) 2022-present Ivan N. Buev <https://github.com/xredday>
 *
 * This file is subject to the GPL-3.0 license that is bundled with this source code
 * in the LICENSE.md file
 */

namespace VKAPI\Traits;

use ReflectionClass;
use ReflectionProperty;
use UnexpectedValueException;

trait FillerTrait {
    private function createObjectOfProperty(mixed $object, string $cn, mixed $default, ?string $use_method): mixed {
        if (enum_exists($cn)) {
            /** @noinspection PhpUndefinedMethodInspection */
            return $cn::tryFrom($object) ?? $default;
        }
        if ($use_method === NULL) return new $cn($object);
        else return $cn::$use_method($object);
    }
    /** @return ReflectionProperty[] */
    protected function addProperties(object $object, array $classes = []): array {
        $reflection = new ReflectionClass($this);
        $props = $reflection->getProperties();
        foreach ($props as $prop) {
            $name = $prop->name;
            if (isset($object->$name)) {
                if (isset($classes[$name])) {
                    $cn = $classes[$name][0];
                    $default = $classes[$name][1] ?? NULL;
                    $array = $classes[$name][2] ?? false;
                    $use_method = $classes[$name][3] ?? NULL;

                    if ($array) {
                        $x = [];
                        foreach ($this->$name as $obj) $x[] = $this->createObjectOfProperty($obj, $cn, $default, $use_method);
                        $this->$name = empty($x) ? $default : $x;
                    } else $this->$name = $this->createObjectOfProperty($object->$name, $cn, $default, $use_method);
                } else $this->$name = $object->$name;
            }
        }
        return $props;
    }
    protected function fillProperties(object $object, array $classes = []): void {
        foreach ($this->addProperties($object, $classes) as $prop) {
            $name = $prop->name;
            if ($prop->isInitialized($this)) continue;
            if ($prop->getType()->allowsNull()) $this->$name = NULL;
            else throw new UnexpectedValueException("Required field {$name} is missing in incoming object");
        }
    }
}