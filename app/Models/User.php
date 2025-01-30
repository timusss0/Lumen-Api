<?php

namespace App\Models;


use Illuminate\Support\Str;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
   
     protected $table = 'users';
     protected $primaryKey = 'id';
     public $incrementing = false; 
     protected $keyType = 'string';  
 
     protected $fillable = ['name', 'email', 'age'];
 
     // Menambahkan UUID saat membuat user
     public static function boot()
     {
         parent::boot();
 
         static::creating(function ($user) {
             if (empty($user->id)) {
                 $user->id = (string) Str::uuid();  
             }
         });
     }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
    ];
}
