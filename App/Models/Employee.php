<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}

?>