<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_user')->withPivot('start_date', 'end_date');
    }

    public function isUsingCar($carId)
    {
        $now = now()->format('Y-m-d H:i:s');

        return $this->cars()->wherePivot('car_id', $carId)
            ->where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->exists();
    }
}

?>