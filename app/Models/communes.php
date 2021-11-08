<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class communes extends Model
{
    use HasFactory;

    protected $table = "communes";
    public $timestamps = true;
    protected $primaryKey = "id_com";

    protected $fillable = [
        'id_reg',
        'description',
        'status',
    ];

    public function regions()
    {
        // return $this->belongsTo('servicios_general','idservicios_general');
        return $this->hasMany('App\Models\regions');

    }
}
