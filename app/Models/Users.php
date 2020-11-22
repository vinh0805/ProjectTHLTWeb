<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['last_name', 'first_name', 'email', 'password', 'email_verified_at', 'gender', 'birthday',
        'address', 'avatar', 'role'];
}


//namespace App\Models;
//
//use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\SoftDeletes;
//
//class User extends Authenticatable
//{
//    use Notifiable;
//    use SoftDeletes;
//
//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array
//     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
//
//    /**
//     * The attributes that should be hidden for arrays.
//     *
//     * @var array
//     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//    /**
//     * The attributes that should be cast to native types.
//     *
//     * @var array
//     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
//
//    public function setPasswordAttribute($value)
//    {
//        $this->attributes['password'] = bcrypt($value);
//    }
//}
