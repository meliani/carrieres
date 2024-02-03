<?php

namespace App\Enums;

enum Status: string
{
    case Draft = "Draft";
    case Announced = "Announced";
    case Rejected = "Rejected";
    case Validated = "Validated";
    case Approved = "Approved";
    case Declined = "Declined";
    case Signed = "Signed";
    case Started = "Started";
    case Completed = "Completed";

    public function getLabel(): ?string
    {
        return __($this->name);
    }
    public function getColor(): ?string {
        return match($this) {
            self::Draft => 'warning',
            self::Announced => 'info',
            self::Rejected => 'danger',
            self::Validated => 'success',
            self::Approved => 'success',
            self::Declined => 'danger',
            self::Signed => 'success',
            self::Started => 'success',
            self::Completed => 'success',
        };
    }
}