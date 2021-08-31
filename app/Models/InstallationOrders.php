<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\InstallationStatus;
use App\Models\ExtraAtributes;
use App\Models\HistoricalIntallationOrder;
use App\Models\Contract;
use App\Models\User;

class InstallationOrders extends Model
{
    use HasFactory, SoftDeletes;

   /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
      'installation_statuses_id',
    	'contracts_id',
    	'date_asig',
    	'date_ord',
    	'date_end',
    	'description'
    ];

    protected $dates = ['deleted_at'];

     // * Function to get InstallationOrders of InstallationStatus
    public function InstallationStatus()
    {
      return $this->belongsTo(InstallationStatus::class,'installation_statuses_id');
    }

     // * Function to get InstallationOrders of ExtraAtributes
    public function ExtraAtributes()
    {
      return $this->hasMany(ExtraAtributes::class,'installation_orders_id');
    }
      /**
     * Function to get InstallationOrders of HistoricalIntallationOrder
     */
    public function HistoricalIntallationOrder()
    {
      return $this->hasMany(HistoricalIntallationOrder::class,'installation_orders_id');
    }

      // * Function to get InstallationOrders of Contract
      
    public function Contract()
    {
      return $this->belongsTo(Contract::class,'contracts_id');
    }

    public function Technical()
    {
      return $this->belongsToMany(User::class, 'install_order_users', 'installation_orders_id','users_id');
    }
}
