<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserData;

class SexUserData extends Model
{
  
    use HasFactory, SoftDeletes;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'name', 
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get SexUserData of UserData
     */
    public function UserData()
    {
        return $this->hasMany(UserData::class,'sex_user_data_id');
    }
}
