<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // protected $primaryKey = 'user_id';

    public function address()
    {
        return $this->hasOne(Address::class, 'user_id');
    }

    public function education()
    {
        return $this->hasOne(Education::class, 'user_id');
    }
}
