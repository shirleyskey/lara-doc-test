<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
    public function booking(){
        return $this->hasMany(Booking::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function availableFor($from, $to): bool
    {
        return 0 === $this->booking()->betWeenDates($from, $to)->count();
    }
}
