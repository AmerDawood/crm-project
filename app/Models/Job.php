<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;


    protected $fillable = ['title'];


    public function contact()
    {
        return $this->hasMany(Contact::class,'topic_id','id');
    }

}
