<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profiles';
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'email',
        'nama',
        'username',
        'headline',
        'tentang_saya',
        'image_path'
    ];
}
