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

class Military {
    use FillerTrait;

    readonly public string $unit;
    readonly public int $unit_id;
    readonly public int $country_id;
    readonly public int $from;
    readonly public int $until;

    function __construct(object $object) {
        $this->fillProperties($object);
    }
}
