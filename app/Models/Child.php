<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'apellidos',
        'birth_date',
        'school_year',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
