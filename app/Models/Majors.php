<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Majors extends Model
{
    protected $table = 'majors'; // opsional, sesuai konvensi Laravel

    protected $fillable = [
        'name',
        'code',
        'description',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
