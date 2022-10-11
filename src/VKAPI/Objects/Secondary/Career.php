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

class Career {
    use FillerTrait;

    readonly public ?int $group_id;
    readonly public ?string $company;
    readonly public int $country_id;
    readonly public ?int $city_id;
    readonly public ?string $city_name;
    readonly public int $from;
    readonly public int $until;
    readonly public string $position;

    function __construct(object $object) {
        $this->fillProperties($object);
    }
}
