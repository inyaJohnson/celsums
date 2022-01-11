<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email' ,'phone', 'password','role_id', 'identification', 'p_text', 'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function name(){
        return auth()->user()->first_name.' '. auth()->user()->last_name;
    }

    public function initials(){
        return substr(auth()->user()->first_name, 0, 1) .' '. substr(auth()->user()->last_name, 0, 1);
    }

    public  function role(){
        return $this->belongsTo(Role::class);
    }

    public function hasRole($role){
        return null !== $this->role()->where('name', $role)->first();
    }

    public function finance(){
        return $this->hasOne(Finance::class, 'user_id');
    }

    public function address(){
        return $this->hasOne(Address::class, 'user_id');
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

}
