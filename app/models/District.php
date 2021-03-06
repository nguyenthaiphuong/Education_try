<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;

class District extends Model implements Transformable
{
    protected $table = 'district';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name'
    ];
}
