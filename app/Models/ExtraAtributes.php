<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\InstallationOrders;

class ExtraAtributes extends Model
{
    use HasFactory, SoftDeletes;
    
      /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
    	'installation_orders_id',
    	'name',
    	'value'
    ];

    protected $dates = ['deleted_at'];

     // * Function to get ExtraAtributes of InstallationOrders 
    public function InstallationOrders()
    {
        return $this->belongsTo(InstallationOrders::class, 'installation_orders_id');
    }
}
