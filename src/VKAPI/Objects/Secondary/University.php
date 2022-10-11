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

use VKAPI\Traits\FillerTrait;

class University {
    use FillerTrait;

    readonly public int $id;
    readonly public int $country;
    readonly public int $city;
    readonly public string $name;
    readonly public int $faculty;
    readonly public string $faculty_name;
    readonly public int $chair;
    readonly public string $chair_name;
    readonly public int $graduation;
    readonly public string $education_form;
    readonly public string $education_status;

    function __construct(object $object) {
        $this->fillProperties($object);
    }
}
