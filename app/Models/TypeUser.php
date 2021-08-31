<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class TypeUser extends Model
{
    use HasFactory, SoftDeletes;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'type', 
        'level'
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get users
     */
    public function User()
    {
        return $this->hasMany(User::class, 'type_users_id');
    }
}
