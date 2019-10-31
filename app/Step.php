<?php

namespace App;

use App\Ordering\Traits\HasOrder;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasOrder;

    protected $fillable = ['title', 'order'];

    public static function boot()
    {
        parent::boot();

         static::creating(function ($step) {
             if (is_null($step->order)) {
                 $step->order = static::orderBy('order', 'desc')->first()->order + 1;
             }
         });
    }
}
