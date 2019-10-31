<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = ['title', 'order'];

    public static function boot()
    {
        parent::boot();

        // static::creating(function ($step) {
        //     if (is_null($step->order)) {
        //         $step->order = static::orderBy('order', 'desc');
        //     }
        // });
    }
}
