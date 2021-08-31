<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\InstallationOrders;
use App\Models\OwnerClient;
use App\Models\HistoricalIntallationOrder;

class InstallationStatus extends Model
{
    use HasFactory, SoftDeletes;
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
    	'owner_clients_id',
    	'status',
        'colour',
        'dark'
    ];


    protected $dates = ['deleted_at'];


    /**
     * Function to get InstallationStatus of InstallationOrders
     */
    public function InstallationOrders()
    {
        return $this->hasMany(InstallationOrders::class,'installation_statuses_id');
    }

      /**
     * Function to get InstallationStatus of OwnerClient
     */
    public function OwnerClient()
    {
        return $this->belongsTo(OwnerClient::class, 'owner_clients_id');
    }
    /**
     * Function to get InstallationStatus of HistoricalIntallationOrder
     */
    public function HistoricalIntallationOrder()
    {
        return $this->hasMany(HistoricalIntallationOrder::class,'installation_statuses_id');
    }
}
