<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\SexUserData;

class UserData extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'sex_user_data_id',
        'name',
        'lastname',
        'identification',
        'date_of_birth',
        'phone',
        'img'
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get User
     */
    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    /**
     * Function to get UserData of SexUserDataFactory
     */
    public function SexUserData()
    {
        return $this->belongsTo(SexUserData::class, 'sex_user_data_id');
    }
}
