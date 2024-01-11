<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersImportDummy extends Model
{
    use HasFactory;
    protected $fillable = [
        // '',
        'first_name',
        'last_name',
        'email',
        // 'password',
        // 'user_id', // Add user_id to the fillable array
        // ... other attributes
    ];
    protected $table = 'usersimport';
}
