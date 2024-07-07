<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
     use HasFactory;
    // protected $table = 'job_listings';
    // protected $guarded = [];

    public function jobs(){
        return $this->hasMany(Job::class);
    }
    public function user(): BelongsTo {
       return $this->belongsTo(User::class);
    }
}
