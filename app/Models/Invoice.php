<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payments;
use App\Models\Subscriptions;

class Invoice extends Model
{
  use HasFactory, SoftDeletes;
  /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
      'n_control',
    	'n_reference',
    	'total_amount',
    	'status',
    	'date',
      'subscriptions_id'
    ];

    protected $dates = ['deleted_at'];
    

    /**
     * Function to get Invoice of Payments
     */
    public function Payments()
    {
        return $this->hasMany(Payments::class,'invoices_id');
    }

    public function  Suscription()
    {
      return $this->belongsTo(Subscriptions::class, 'subscriptions_id');
    }
}
