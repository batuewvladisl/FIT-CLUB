<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonement extends Model
{
    public $table = "abonement";

    use HasFactory;

    protected $fillable = [
        'abonement',
    ];

}
