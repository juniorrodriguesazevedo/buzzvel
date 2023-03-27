<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QrCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'linkedin',
        'github',
        'url',
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => Str::of($value)->trim()->ucfirst(),
        );
    }

    protected function linkedin(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => trim($value),
        );
    }

    protected function github(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => trim($value),
        );
    }
}
