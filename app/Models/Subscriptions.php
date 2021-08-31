<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plans;
use App\Models\Invoice;
use App\Models\OwnerClient;
use App\Models\Payments;
use App\Models\Subscriptions;

class Subscriptions extends Model
{
    use HasFactory, SoftDeletes;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'plans_id', 
        'owner_clients_id',
        'name', 
        'date', 
        'price',
        'inactive'
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get plans of subscriptions
     */
    public function Plans()
    {
        return $this->belongsTo(Plans::class, 'plans_id');
    }

    /**
     * Function to get subscriptions of Invoice
     */
   public function Invoice()
    {
       return $this->hasMany(Invoice::class);
   }

     /**
     * Function to get subscriptions of OwnerClient
     */
    public function OwnerClient()
    {
        return $this->belongsTo(OwnerClient::class,'owner_clients_id');
    }
}
