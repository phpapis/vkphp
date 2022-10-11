<?php
/*
 * This file is a part of the phpapis/VKPHP project.
 *
 * Copyright (c) 2022-present Ivan N. Buev <https://github.com/xredday>
 *
 * This file is subject to the GPL-3.0 license that is bundled with this source code
 * in the LICENSE.md file
 */

namespace VKAPI\Objects\Secondary;

use VKAPI\Enums\SchoolType;
use VKAPI\Traits\FillerTrait;

class School {
    use FillerTrait;

    readonly public string $id;
    readonly public int $country;
    readonly public int $city;
    readonly public string $name;
    readonly public int $year_from;
    readonly public int $year_to;
    readonly public int $year_graduated;
    readonly public string $class;
    readonly public string $speciality;
    readonly public SchoolType $type;

    function __construct(object $object) {
        $this->fillProperties($object, [
            'type' => [SchoolType::class],
        ]);
    }
}