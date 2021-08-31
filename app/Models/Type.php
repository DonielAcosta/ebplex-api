<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Type extends Model
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
     * Function to get type of Client
     */
    public function Client()
    {
        return $this->hasMany(Client::class, 'types_id');
    }
}
