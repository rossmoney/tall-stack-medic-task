<?php

namespace App\Enums;

enum YesNo: int
{
    case NO = 0;
    case YES = 1;

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ')->title();
    }
}
