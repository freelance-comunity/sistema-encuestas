<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poll extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'polls';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'description', 'start_message', 'end_message'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
