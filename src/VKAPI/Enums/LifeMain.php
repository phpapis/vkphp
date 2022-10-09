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

enum LifeMain: int {
    case FamilyAndKids = 1;
    case CareerAndMoney = 2;
    case EntertainmentAndRecreation = 3;
    case ScienceAndResearch = 4;
    case WorldPerfection = 5;
    case SelfDevelopment = 6;
    case BeautyAndArt = 7;
    case FameAndInfluence = 8;
}
