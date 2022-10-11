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

use Carbon\Carbon;
use VKAPI\Enums\Platform;
use VKAPI\Traits\FillerTrait;

class LastSeen {
    use FillerTrait;

    readonly public Carbon $time;
    readonly public Platform $platform;

    function __construct(object $object) {
        $this->fillProperties($object, [
            'time' => [Carbon::class, NULL, false, 'createFromTimestamp'],
            'platform' => [Platform::class],
        ]);
    }
}
