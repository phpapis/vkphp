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

enum Platform: int {
    case Mobile = 1;
    case iPhone = 2;
    case iPad = 3;
    case Android = 4;
    case WindowsPhone = 5;
    case Windows10 = 6;
    case Desktop = 7;
}
