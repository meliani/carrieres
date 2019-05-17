<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;

class baseModel extends Model
{
    public function scopeActive($query) {
            return $query->where('is_active', true);
    }
    public function scopeValid($query) {
        return $query->where('is_valid', true);
    }
    public function scopePublished($query) {
        return $query->where('status', null);
    }
    public function scopeArchived($query) {
        return $query->where('status', -1);
    }
}