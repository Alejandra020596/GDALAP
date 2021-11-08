<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regions extends Model
{
    use HasFactory;

    protected $table = "regions";
    public $timestamps = true;
    protected $primaryKey = "id_reg";

    protected $fillable = [
        'description',
        'status',
    ];

}
