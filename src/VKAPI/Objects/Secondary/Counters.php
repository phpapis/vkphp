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

class Counters {
    readonly public int $albums;
    readonly public int $videos;
    readonly public int $audios;
    readonly public int $photos;
    readonly public int $notes;
    readonly public int $friends;
    readonly public int $groups;
    readonly public int $online_friends;
    readonly public int $mutual_friends;
    readonly public int $user_videos;
    readonly public int $followers;
    readonly public int $pages;
}
