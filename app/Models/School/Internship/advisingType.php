<?php

namespace App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;

class advisingType extends Model
{
    public function typeText($type){
        case 11:
            return 'encadrant 1',
        case 12:
            return 'encadrant 2',
        case 21:
            return 'examinateur 1',
        case 22:
            return 'examinateur 2',
        case 23:
            return 'examinateur 3',
            break;
            
    }
}
