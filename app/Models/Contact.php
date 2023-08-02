<?php

namespace App\Models;

use App\Models\Scopes\UserContactScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'image_path', 'description', 'user_id', 'job_id', 'birthday', 'city'];


    protected static function booted()
    {
       static::addGlobalScope(new UserContactScope);
    }




    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
