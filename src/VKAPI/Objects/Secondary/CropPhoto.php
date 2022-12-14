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

use VKAPI\Objects\Photo;
use VKAPI\Traits\FillerTrait;

class CropPhoto {
    use FillerTrait;

    readonly public Photo $photo;
    readonly public Crop $crop;
    readonly public Crop $rect;

    function __construct(object $object) {
        $this->fillProperties($object, [
            'photo' => [Photo::class],
            'crop' => [Crop::class],
            'rect' => [Crop::class],
        ]);
    }
}
