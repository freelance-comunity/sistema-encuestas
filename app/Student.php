<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['student_id', 'name', 'last_name', 'second_last_name', 'gender', 'birthdate', 'state_birth', 'town_birth', 'curp', 'sep', 'languages', 'phone', 'cell_phone', 'state', 'town', 'country', 'street', 'house_number', 'colony', 'post_code', 'email', 'social_networks', 'tutor_name', 'in_law', 'tutor_phone', 'tutor_email', 'tutor_address', 'school_origin_id', 'average', 'shift', 'status'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
