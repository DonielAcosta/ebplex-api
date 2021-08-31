<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentMethod;
use App\Models\Invoice;

class Payments extends Model
{
  use HasFactory, SoftDeletes;
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
    	'payment_method_id',
    	'invoices_id',
      'n_control',
      'n_reference', 
      'name', 
      'date',
      'canceled',
    ];

    protected $dates = ['deleted_at'];

     /**
     * Function to get Payments of PaymentMethod 
     */
    public function PaymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

      /**
     * Function to get Payments of Invoice 
     */
    public function Invoice()
    {
        return $this->belongsTo(Invoice::class,'invoices_id');
    }
}
