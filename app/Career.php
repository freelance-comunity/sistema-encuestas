<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'careers';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'career_key', 'description', 'dependence', 'key_incorporation', 'turn', 'id_department', 'campus_id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
