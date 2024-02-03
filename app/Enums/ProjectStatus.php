<?php

namespace App\Models\Enums;

enum ProjectStatus: string
{
    case Applied = "Applied";
    case Accepted = "Accepted";
    case Rejected = "Rejected";
    case Cancelled = "Cancelled"; // Reserved to Administration
    case Completed = "Completed"; // Reserved to Administration
}