<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\OwnerClient;

class DataCompany extends Model
{
    use HasFactory, SoftDeletes;
       /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
    	'owner_clients_id',
    	'bussiness_name',
    	'legal_representative'
    ];

    protected $dates = ['deleted_at'];

     // * Function to get DataCompany of OwnerClient
    public function OwnerClient()
    {
        return $this->belongsTo(OwnerClient::class,'owner_clients_id');
    }
}
