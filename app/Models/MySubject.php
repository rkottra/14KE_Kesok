<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class MySubject extends Model
{
    use HasFactory;

    public function mystudents(): BelongsToMany
    {
        return $this->belongsToMany(MyStudent::class);
    }
}
