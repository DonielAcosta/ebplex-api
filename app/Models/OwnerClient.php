<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Subscriptions;
use App\Models\InstallationStatus;
use App\Models\PlansLevelTwo;
use App\Models\Service;
use App\Models\Client;
use App\Models\DataCompany;

class OwnerClient extends Model
{
    use HasFactory, SoftDeletes;
    
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        // 'users_id',
        'identification',
        'name',
        'phone',
        'email',
        'description'
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get OwnerClient of Users 
     */
    public function User()
    {
        return $this->hasMany(User::class, 'owner_clients_id');
    }

    /**
     * Function to get OwnerClient of Subscriptions
    */
    public function Subscriptions()
    {
        return $this->hasMany(Subscriptions::class, 'owner_clients_id');
    }
    
    /**
     * Function to get OwnerClient of InstallationStatus
     */
    public function InstallationStatus()
    {
        return $this->hasMany(InstallationStatus::class,'owner_clients_id');
    }
    
    /**
     * Function to get OwnerClient of PlansLevelTwo
    */
    public function PlansLevelTwo()
    {
        return $this->hasMany(PlansLevelTwo::class, 'owner_clients_id');
    }

    /**
     * Function to get OwnerClient of Service
    */ 
    public function Service()
    {
        return $this->hasMany(Service::class,'owner_clients_id');
    }
    
    // * Function to get OwnerClient of Client
    public function Client()
    {
        return $this->hasMany(Client::class,'owner_clients_id');
    }

    // * Function to get Company of DataCompany
    public function DataCompany()
    {
        return $this->hasMany(DataCompany::class,'owner_clients_id');
    }
}
