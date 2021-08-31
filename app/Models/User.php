<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Models\TypeUser;
use App\Models\UserData;
use App\Models\OwnerClient;
use App\Models\InstallationOrders;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'type_users_id',
        'owner_clients_id',
        'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }

    /**
     * Function to get users
     */
    public function TypeUser()
    {
        return $this->belongsTo(TypeUser::class, 'type_users_id');
    }

    /**
     * Function to get UserData
     */
    public function UserData()
    {
        return $this->hasOne(UserData::class,'users_id');
    }

    /**
     * Function to get Users of OwnerClient
     */
    public function OwnerClient()
    {
        return $this->belongsTo(OwnerClient::class,'owner_clients_id');
    }
    
    /**
     * Function to get Users of InstallOrderUser
    */
    public function InstallOrderUser()
    {
        return $this->belongsToMany(InstallationOrders::class, 'install_order_users', 'users_id','installation_orders_id');
    }

    /**
     * Function to get HistoricalIntallationOrder
     */
    public function HistoricalIntallationOrder()
    {
        return $this->hasOne(HistoricalIntallationOrder::class,'users_id');
    }
}
