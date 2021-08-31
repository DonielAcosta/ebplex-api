<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\OwnerClient;
use App\Models\Packages;

class PlansLevelTwo extends Model
{
    use HasFactory, SoftDeletes;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'owner_clients_id',
    	'name', 
    	'price' 
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get PlansLevelTwo of OwnerClient
     */
    public function OwnerClient()
    {
        return $this->belongsTo(OwnerClient::class,'owner_clients_id');
    }

     /**
     * Function to get PlansLevelTwo of PlansServices
     */
    public function Services()
    {
        return $this->belongsToMany(Service::class, 'plans_services', 'plans_level_twos_id', 'services_id');
    }
    
       /**
     * Function to get PlansLevelTwo of Packages
     */
    public function Packages()
    {
        return $this->hasMany(Packages::class,'plans_level_twos_id');
    }
}
