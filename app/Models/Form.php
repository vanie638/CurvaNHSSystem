<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'forms';

    protected $primaryKey = 'form_id';

    protected $fillable = [
        'user_id',
        'form_request_date',
        'form_status',
        'form_content',
        'rejection_reason',
        'academic_year',
        'course_program',
        'form_release_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

