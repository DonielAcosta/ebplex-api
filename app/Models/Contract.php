<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\InstallationOrders;
use App\Models\Packages;
use App\Models\Client;

class Contract extends Model
{
    use HasFactory, SoftDeletes;
       /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'clients_id',
    	'n_contract',
    	'date'
    ];

    protected $dates = ['deleted_at'];
     
    public function InstallationOrders()
    {
        return $this->hasMany(InstallationOrders::class,'contracts_id');
    }

     // * Function to get Contract of Packages
    public function Packages()
    {
        return $this->hasMany(Packages::class,'contracts_id');
    }

    // * Function to get Contract of Client
    public function Client()
    {
        return $this->belongsTo(Client::class,'clients_id');
    }
}
