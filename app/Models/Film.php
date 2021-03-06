<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Plank\Mediable\Mediable;

class Film extends Model
{
    use HasFactory, SoftDeletes, Mediable;

    protected $fillable = ['user_id', 'title', 'category', 'body'];

    public function nickname() {
        return $this->hasOne(User::class, 'id', 'user_id')->select(['nick','id']);
    }

}
