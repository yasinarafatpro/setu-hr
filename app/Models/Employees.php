<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory ,SoftDeletes;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'emp_id',
        'name',
        'email',
        'phone_number',
        'designation',
        'branch_name',
        'status'
    ];
}
