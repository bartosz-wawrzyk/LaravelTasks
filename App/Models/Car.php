<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'car_user')->withPivot('start_date', 'end_date');
    }
}

?>