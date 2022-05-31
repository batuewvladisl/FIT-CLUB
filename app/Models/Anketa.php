<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anketa extends Model
{
    public $table = "anketas";

    use HasFactory;

    protected $fillable = [
        'name',
        'telephone',
        'abonement',
        'approved',
        'not_approved',
    ];

    public function isApproved()
    {
        return $this->approved === 1;
    }

    public function isNotApproved()
    {
        return $this->not_approved === 1;
    }
}
