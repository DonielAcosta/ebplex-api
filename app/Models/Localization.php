<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direction;
use App\Models\Localization;
use App\Models\TypesLocalization;

class Localization extends Model
{
    use HasFactory, SoftDeletes;
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = [
      'types_localizations_id',
      'localizations_id',
      'name' 
    ];

    protected $dates = ['deleted_at'];

    // * Function to get Localization of Direction
    public function Direction()
    {
        return $this->hasMany(Direction::class,'localizations_id');
    }

     // * Function to get Localization of Localization
    public function Parent()
    {
        return $this->belongsTo(Localization::class,'localizations_id');
    }
    
     // * Function to get Localization of TypesLocalization
      public function TypesLocalization()
    {
        return $this->belongsTo(TypesLocalization::class,'types_localizations_id');
    }
}
