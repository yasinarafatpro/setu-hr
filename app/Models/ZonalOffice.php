<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZonalOffice extends Model
{
    use HasFactory ,SoftDeletes;
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'zonal_offices';
   protected $primaryKey = 'id';

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
    'headoffice_id',
    'name',
    'address'
   ];
}
