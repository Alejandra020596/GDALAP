<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $table = "customers";
    public $timestamps = true;
    protected $primaryKey = "dni";

    protected $fillable = [
        'id_reg',
        'id_com',
        'email',
        'name',
        'last_name',
        'address',
        'date_reg',
        'status'
    ];

    public function regions()
    {
        // return $this->belongsTo('servicios_general','idservicios_general');
        return $this->hasMany('App\Models\regions');

    }
    public function communes()
    {
        // return $this->belongsTo('servicios_general','idservicios_general');
        return $this->hasMany('App\Models\communes');

    }
}
