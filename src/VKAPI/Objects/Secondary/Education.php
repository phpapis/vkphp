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

class Education {
    readonly public int $university;
    readonly public string $university_name;
    readonly public int $faculty;
    readonly public string $faculty_name;
    readonly public int $graduation;
}
