<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Finance extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['source_of_income', 'annual_income', 'asset', 'current_balance', 'previous_balance', 'stock', 'user_id'];
}
