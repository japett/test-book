<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'domicile',
        'time',
        'date',
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
