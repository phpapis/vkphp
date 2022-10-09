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

enum FriendStatus: int {
    case NotFriend = 0;
    case OutgoingRequest = 1;
    case IncomingRequest = 2;
    case IsFriend = 3;
}
