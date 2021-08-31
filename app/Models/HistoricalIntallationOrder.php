<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\InstallationOrders;
use App\Models\InstallationStatus;
use App\Models\User;

class HistoricalIntallationOrder extends Model
{
    use HasFactory, SoftDeletes;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
    	'installation_orders_id',
    	'installation_statuses_id',
        'users_id',
    	'date',
    	'description'
    ];

    protected $dates = ['deleted_at'];

     // * Function to get HistoricalIntallationOrder of InstallationOrders
    public function InstallationOrders()
    {
        return $this->belongsTo(InstallationOrders::class,'installation_orders_id');
    }

     // * Function to get HistoricalIntallationOrder of InstallationStatus
    public function InstallationStatus()
    {
        return $this->belongsTo(InstallationStatus::class,'installation_statuses_id');
    }

    // * Function to get HistoricalIntallationOrder of InstallationStatus

    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
