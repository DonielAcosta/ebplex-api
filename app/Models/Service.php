<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\OwnerClient;
use App\Models\Packages;
use App\Models\ServiceAtributes;
use App\Models\PlansLevelTwo;

class Service extends Model
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
        'price',
        'description'
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get Service of OwnerClient
     */
    public function OwnerClient()
    {
        return $this->belongsTo(OwnerClient::class, 'owner_clients_id');
    }
    
     /**
     * Function to get PlansLevelTwo of Services
     */
    public function Services()
    {
        return $this->belongsToMany(Service::class, 'plans_services', 'services_id', 'plans_level_twos_id');
    }
        /** 
     * Function to get Service of Packages
     */
    public function Packages()
    {
        return $this->hasMany(Packages::class,'services_id');
    }
     /**
     * Function to get Service of ServiceAtributes
     */
    public function ServiceAtributes()
    {
        return $this->hasMany(ServiceAtributes::class,'services_id');
    }
}
