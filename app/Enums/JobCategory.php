<?php

namespace App\Enums;

enum JobCategory: string
{
    case RTC = 'rtc';
    case SPORT_LEISURE = 'sport_leisure';
    case ACCIDENTAL = 'accidental';
    case EXPOSURE = 'exposure';
    case INTENTIONAL = 'intentional';
    case ASSAULT = 'assault';
    case MEDICAL = 'medical';

    public function label(): string
    {
        return match ($this) {
            self::RTC => 'Road Traffic Collision',
            self::SPORT_LEISURE => 'Fall from Height',
            self::ACCIDENTAL => 'Accidental Injury',
            self::EXPOSURE => 'Exposure',
            self::INTENTIONAL => 'Intentional Self-Harm',
            self::ASSAULT => 'Assault',
            self::MEDICAL => 'Medical',
        };
    }
}
