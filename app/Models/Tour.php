<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasUuids;
    protected $fillable = [
        'travel_id',
        'name',
        'starting_date',
        'ending_date',
        'price',
    ];

    public function price():Attribute
    {
        return Attribute::make(
            get : fn($value) => $value / 100,
            set : fn($value) => $value * 100,
        );
    }
}
