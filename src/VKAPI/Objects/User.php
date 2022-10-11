<?php
/*
 * This file is a part of the phpapis/VKPHP project.
 *
 * Copyright (c) 2022-present Ivan N. Buev <https://github.com/xredday>
 *
 * This file is subject to the GPL-3.0 license that is bundled with this source code
 * in the LICENSE.md file
 */

namespace VKAPI\Objects;

use Carbon\CarbonTimeZone;
use VKAPI\Enums\FriendStatus;
use VKAPI\Enums\Relation;
use VKAPI\Enums\Sex;
use VKAPI\Enums\WallMode;
use VKAPI\Objects\Secondary\Career;
use VKAPI\Objects\Secondary\Contacts;
use VKAPI\Objects\Secondary\Counters;
use VKAPI\Objects\Secondary\CropPhoto;
use VKAPI\Objects\Secondary\Education;
use VKAPI\Objects\Secondary\Geo;
use VKAPI\Objects\Secondary\LastSeen;
use VKAPI\Objects\Secondary\Military;
use VKAPI\Objects\Secondary\Occupation;
use VKAPI\Objects\Secondary\Personal;
use VKAPI\Objects\Secondary\RelationPartner;
use VKAPI\Objects\Secondary\Relative;
use VKAPI\Objects\Secondary\School;
use VKAPI\Objects\Secondary\University;
use VKAPI\Traits\FillerTrait;

class User {
    use FillerTrait;

    readonly public int $id;
    readonly public string $first_name;
    readonly public string $last_name;
    readonly public bool $deactivated;
    readonly public bool $is_closed;
    readonly public bool $can_access_closed;

    /* Optional fields A-I */
    readonly public ?string $about;
    readonly public ?string $activities;
    readonly public ?string $bdate;
    readonly public ?bool $blacklisted;
    readonly public ?bool $blacklisted_by_me;
    readonly public ?string $books;
    readonly public ?bool $can_post;
    readonly public ?bool $can_see_all_posts;
    readonly public ?bool $can_see_audio;
    readonly public ?bool $can_send_friend_request;
    readonly public ?bool $can_write_private_message;
    readonly public ?Career $career;
    readonly public ?Geo $city;
    readonly public ?int $common_count;
    readonly public ?array $connections;
    readonly public ?Contacts $contacts;
    readonly public ?Counters $counters;
    readonly public ?Geo $country;
    readonly public ?CropPhoto $crop_photo;
    readonly public ?string $domain;
    readonly public ?Education $education;
    // TODO: Determine exports format
    readonly public ?object $exports;
    readonly public ?string $first_name_nom;
    readonly public ?string $first_name_gen;
    readonly public ?string $first_name_dat;
    readonly public ?string $first_name_acc;
    readonly public ?string $first_name_ins;
    readonly public ?string $first_name_abl;
    readonly public ?int $followers_count;
    readonly public ?FriendStatus $friend_status;
    readonly public ?string $games;
    readonly public ?bool $has_mobile;
    readonly public ?bool $has_photo;
    readonly public ?string $home_town;
    readonly public ?string $interests;
    readonly public ?bool $is_favorite;
    readonly public ?bool $is_friend;
    readonly public ?bool $is_hidden_from_feed;
    readonly public ?bool $is_no_index;
    /* Optional fields L-R */
    readonly public ?string $last_name_nom;
    readonly public ?string $last_name_gen;
    readonly public ?string $last_name_dat;
    readonly public ?string $last_name_ac;
    readonly public ?string $last_name_ins;
    readonly public ?string $last_name_abl;
    readonly public ?LastSeen $last_seen;
    // NOTE: API returns string
    readonly public ?array $lists;
    readonly public ?string $maiden_name;
    readonly public ?Military $military;
    readonly public ?string $movies;
    readonly public ?string $music;
    readonly public ?string $nickname;
    readonly public ?Occupation $occupation;
    readonly public ?bool $online;
    readonly public ?bool $online_mobile;
    readonly public ?string $online_app;
    readonly public ?Personal $personal;
    readonly public ?string $photo_50;
    readonly public ?string $photo_100;
    readonly public ?string $photo_200_orig;
    readonly public ?string $photo_200;
    readonly public ?string $photo_400_orig;
    readonly public ?string $photo_id;
    readonly public ?string $photo_max;
    readonly public ?string $photo_max_orig;
    readonly public ?string $quotes;
    /** @var Relative[]|null */
    readonly public ?array $relatives;
    readonly public ?Relation $relation;
    readonly public ?RelationPartner $relation_partner;
    /* Optional fields S-W */
    /** @var School[]|null */
    readonly public ?array $schools;
    readonly public ?string $screen_name;
    readonly public ?Sex $sex;
    readonly public ?string $site;
    readonly public ?string $status;
    readonly public ?string $status_audio;
    readonly public ?CarbonTimeZone $timezone;
    readonly public ?bool $trending;
    readonly public ?string $tv;
    /** @var University[]|null */
    readonly public ?array $universities;
    readonly public ?bool $verified;
    readonly public ?WallMode $wall_default;

    function __construct(object $object) {
        $this->fillProperties($object, [
            'career' => [Career::class],
            'city' => [Geo::class],
            'contacts' => [Contacts::class],
            'counters' => [Counters::class],
            'country' => [Geo::class],
            'crop_photo' => [CropPhoto::class],
            'education' => [Education::class],
            'friend_status' => [FriendStatus::class],
            'last_seen' => [LastSeen::class],
            'military' => [Military::class],
            'occupation' => [Occupation::class],
            'personal' => [Personal::class],
            'relatives' => [Relative::class, NULL, true],
            'relation' => [Relation::class],
            'relation_partner' => [RelationPartner::class],
            'schools' => [School::class, NULL, true],
            'sex' => [Sex::class],
            'timezone' => [CarbonTimeZone::class],
            'universities' => [University::class, NULL, true],
            'wall_default' => [WallMode::class],
        ]);
    }
}
