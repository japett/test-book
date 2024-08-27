<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Readline\Transient;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'point',
        'price',
        'description',
        'name',
        'image',
    ];

    public function transaction()
    {
        return $this->belongsToMany(Transaction::class, 'transaction_treatment');
    }

}
