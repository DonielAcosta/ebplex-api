<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\PlansLevelTwo;
use App\Models\Service;
use App\Models\Contract;

class Packages extends Model
{
  use HasFactory, SoftDeletes;
    
    /**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
    protected $fillable = [
      'plans_level_twos_id',
      'services_id',
      'contracts_id',
      'price',
      'qty'
    ];

    protected $dates = ['deleted_at'];


    /**
     * Function to get Packages of PlansLevelTwo 
     */
    public function PlansLevelTwo()
    {
      return $this->belongsTo(PlansLevelTwo::class,'plans_level_twos_id');
    }
      /**
     * Function to get Packages of Service
     */
    public function Service()
    {
      return $this->belongsTo(Subscriptions::class,'services_id');
    }
      /**
     * Function to get Packages of Contract
     */
    public function Contract()
    {
      return $this->belongsTo(Contract::class,'contracts_id');
    }
}
