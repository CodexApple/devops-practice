<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'tbl_subjects';

    protected $fillable = [
        'subject_slug',
        'subject_name',
    ];

    protected $hidden = [
        'id',
        'subject_slug',
        'created_at',
        'updated_at',
    ];

    protected function setSubjectNameAttribute($value): void
    {
        $this->attributes['subject_name'] = $value;
        $this->attributes['subject_slug'] = Str::slug($value, '-');
    }
}
