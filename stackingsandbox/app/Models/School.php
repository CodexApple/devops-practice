<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class School extends Model
{
    use HasFactory;

    protected $table = 'tbl_schools';

    protected $fillable = [
        'school_slug',
        'school_name',
    ];

    protected $hidden = [
        'id',
        'school_slug',
        'created_at',
        'updated_at',
    ];

    public function setSchoolNameAttribute($value): void
    {
        $this->attributes['school_name'] = $value;
        $this->attributes['school_slug'] = Str::slug($value);
    }
}
