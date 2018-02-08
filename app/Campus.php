<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campus extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'campuses';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['campus_id', 'name', 'corporate_name', 'rfc', 'address', 'number_outside', 'number_inside', 'reference', 'postal_code', 'city', 'colony', 'federal_entity', 'country', 'campus_key', 'status'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
