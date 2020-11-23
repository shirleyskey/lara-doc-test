<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function bookable(){
        return $this->belongsTo(Bookable::class);
    }
    
    public function scopeBetweenDates(Builder $query, $from, $to){
        return $query->where('to', '>=', $from)
            ->where('from', '<=', $to);
    }
}
