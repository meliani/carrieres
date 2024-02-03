<?php

namespace App\Enums;


enum Title: string
{
    case Mrs = 'Mrs';
    case Mr = 'Mr';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Mrs => 'Mrs.',
            self::Mr => 'Mr.',
        };
    }
    public function getColor(): ?string
    {
        return match ($this) {
            self::Mrs => 'warning',
            self::Mr => 'info',
        };
    }


}
