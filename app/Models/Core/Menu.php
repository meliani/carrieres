<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    // ******************** LOVE LETTERS (SCOPES) ************************ //

    public function scopeAdmin($query) {
        return $query->where('profile_type', 'admin');
    }
    public function scopeProf($query) {
        return $query->where('profile_type', 'prof');
    }
    public function scopeStudent($query) {
        return $query->where('profile_type', 'student');
    }
    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
    // ******************** LOVE RELATIONSHIPS ************************ //
}
