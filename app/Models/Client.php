<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\OwnerClient;
use App\Models\Contract;
use App\Models\Type;
use App\Models\Direction;


class Client extends Model
{
    use HasFactory, SoftDeletes;
    
      /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'owner_clients_id',
    	'types_id',
        'identification',
        'email',
        'lastname',
        'name',
        'phone',
    ];

    protected $dates = ['deleted_at'];
    

    // * Function to get Contract of Packages
    public function OwnerClient()
    {
        return $this->belongsTo(OwnerClient::class,'owner_clients_id');
    }
    
    // * Function to get Client of Contract 
    public function Contract()
    {
        return $this->hasMany(Contract::class,'clients_id');
    }
    
    // * Function to get Client of Type
    public function Type()
    {
        return $this->belongsTo(Type::class,'types_id');
    }
    
    // * Function to get Company of Direction
    public function Direction()
    {
        return $this->hasMany(Direction::class,'clients_id');
    }
}
