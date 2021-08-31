<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Localization;

class TypesLocalization extends Model
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
     * Function to get TypesLocalization of Localization
     */
    public function Localization()
    {
        return $this->hasMany(Localization::class, 'types_localizations_id');
    }
}
