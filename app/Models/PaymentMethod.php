<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payments;

class PaymentMethod extends Model
{
    use HasFactory, SoftDeletes;
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
    	'name'
    ];

    protected $dates = ['deleted_at'];


    /**
     * Function to get PaymentMethod of Payment
     */
    public function Payments()
    {
        return $this->hasMany(Payments::class);
    }
}
