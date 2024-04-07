<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $primaryKey = "customer_id";

    public function payments()
    {
        return $this->hasMany(Payment::class, 'customer_id', 'customer_id');
    }
}