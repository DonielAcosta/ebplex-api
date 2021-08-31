<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Localization;

class Direction extends Model
{
    use HasFactory, SoftDeletes;
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'clients_id',
    	'localizations_id',
    	'direction',
    	'house_number',
    	'apartment_number_tower_and_floor',
    	'urbanization'
    ];

    protected $dates = ['deleted_at'];

     // * Function to get Direction of Company
    public function Client()
    {
        return $this->belongsTo(Client::class,'clients_id');
    }

     // * Function to get Direction of Localization
    public function Localization()
    {
        return $this->belongsTo(Localization::class,'localizations_id');
    }
}
