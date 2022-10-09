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

enum SchoolType: int {
    case School = 0;
    case Gymnasium = 1;
    case Lyceum = 2;
    case BoardingSchool = 3;
    case EveningSchool = 4;
    case MusicalSchool = 5;
    case SportsSchool = 6;
    case ArtSchool = 7;
    case College = 8;
    case ProfessionalLyceum = 9;
    case TechnicalCollege = 10;
    case VocationalSchool = 11;
    case Academy = 12;
    case ArtCollege = 13;
}
