<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Study extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'studies';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'description', 'short_description', 'credits', 'number_grades', 'status', 'career_id', 'campus_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
