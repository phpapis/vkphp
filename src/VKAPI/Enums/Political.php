<?php
/*
 * This file is a part of the phpapis/VKPHP project.
 *
 * Copyright (c) 2022-present Ivan N. Buev <https://github.com/xredday>
 *
 * This file is subject to the GPL-3.0 license that is bundled with this source code
 * in the LICENSE.md file
 */

namespace VKAPI\Enums;

enum Political: int {
    case Communist = 1;
    case Socialist = 2;
    case Moderate = 3;
    case Liberal = 4;
    case Conservative = 5;
    case Monarchic = 6;
    case Ultraconservative = 7;
    case Indifferent = 8;
    case Libertarian = 9;
}
