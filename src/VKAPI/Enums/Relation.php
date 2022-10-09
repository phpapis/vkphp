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

enum Relation: int {
    case NotSpecified = 0;
    case NotMarried = 1;
    case HasFriend = 2;
    case Engaged = 3;
    case Married = 4;
    case EverythingIsHard = 5;
    case ActivelySearching = 6;
    case InLove = 7;
    case InCivilMarriage = 8;
}
