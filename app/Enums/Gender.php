<?php

namespace App\Enums;

enum Gender: int
{
    case MALE = 0;
    case FEMALE = 1;

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ')->title();
    }
}
