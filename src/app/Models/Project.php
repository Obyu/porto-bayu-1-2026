<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $guarded = [];

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}