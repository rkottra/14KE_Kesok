<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MyStudent extends Model
{
    use HasFactory;

    public function myclass(): BelongsTo
    {
        return $this->belongsTo(MyClass::class, 'my_class_id');
    }

    public function mysubjects(): BelongsToMany
    {
        return $this->belongsToMany(MySubject::class);
    }
}
