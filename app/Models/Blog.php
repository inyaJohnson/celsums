<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title','content','caption','category_id','slug','image','user_id'];

    public function comments(){
        return $this->hasMany(BlogComment::class);
    }


    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }


    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

}
