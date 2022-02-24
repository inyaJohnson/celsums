<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name','description','caption','start_date','end_date','phone','email','venue','user_id', 'image', 'slug'];

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
