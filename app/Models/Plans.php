<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscriptions;

class Plans extends Model
{
    use HasFactory, SoftDeletes;

    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
        'name',
        'price'
    ];

    protected $dates = ['deleted_at'];

    /**
     * Function to get plans of subscriptions
     */
    public function Subscriptions()
    {
        return $this->hasMany(Subscriptions::class);
    }
}
