<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cycle extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cycles';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cycle_year', 'cycle_quarter', 'description', 'start_cycle', 'end_cycle', 'admin_cycle_year', 'admin_cycle_quarter', 'generation', 'status', 'campus_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
