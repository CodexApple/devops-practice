<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Department extends Model
{
    use HasFactory;

    protected $table = 'tbl_departments';

    protected $fillable = [
        'department_slug',
        'department_name',
    ];

    protected $hidden = [
        'id',
        'department_slug',
        'created_at',
        'updated_at',
    ];

    protected function setDepartmentNameAttribute($value): void
    {
        $this->attributes['department_name'] = $value;
        $this->attributes['department_slug'] = Str::slug($value, '-');
    }
}
