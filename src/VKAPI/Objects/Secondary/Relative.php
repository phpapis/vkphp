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

use VKAPI\Enums\RelativeType;
use VKAPI\Traits\FillerTrait;

class Relative {
    use FillerTrait;

    readonly public ?int $id;
    readonly public string $name;
    readonly public RelativeType $type;

    function __construct(object $object) {
        $this->fillProperties($object, [
            'type' => [RelativeType::class],
        ]);
    }
}
