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

use VKAPI\Enums\Attitude;
use VKAPI\Enums\LifeMain;
use VKAPI\Enums\PeopleMain;
use VKAPI\Enums\Political;
use VKAPI\Traits\FillerTrait;

class Personal {
    use FillerTrait;

    readonly public ?Political $political;
    readonly public ?array $langs;
    readonly public ?string $religion;
    readonly public ?string $inspired_by;
    readonly public ?PeopleMain $people_main;
    readonly public ?LifeMain $life_main;
    readonly public ?Attitude $smoking;
    readonly public ?Attitude $alcohol;

    function __construct(object $object) {
        $this->fillProperties($object, [
            'political' => [Political::class],
            'people_main' => [PeopleMain::class],
            'life_main' => [LifeMain::class],
            'smoking' => [Attitude::class],
            'alcohol' => [Attitude::class],
        ]);
    }
}
