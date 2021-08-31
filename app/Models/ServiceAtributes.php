<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceAtributes extends Model
{
    use HasFactory, SoftDeletes;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'services_id', 
        'name',  
        'value'
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get ServiceAtributes of Service
     */
    public function Service()
    {
        return $this->belongsTo(Service::class,'services_id');
    }
}
