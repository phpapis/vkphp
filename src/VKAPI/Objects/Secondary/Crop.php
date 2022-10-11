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

class Crop {
    use FillerTrait;

    /** @var float Coordinate X of left upper angle (percents) */
    readonly public float $x;
    /** @var float Coordinate Y of left upper angle (percents) */
    readonly public float $y;
    /** @var float Coordinate X of right bottom angle (percents) */
    readonly public float $x2;
    /** @var float Coordinate Y of right bottom angle (percents) */
    readonly public float $y2;

    function __construct(object $object) {
        $this->fillProperties($object);
    }
}
