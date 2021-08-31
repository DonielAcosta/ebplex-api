<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserData;
use App\Models\OwnerClient;

class UsersOwnerClients extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'owner_clients_id'
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
     * Function to get OwnerClient
     */
    public function OwnerClients()
    {
        return $this->belongsTo(OwnerClient::class, 'owner_clients_id');
    }
}
