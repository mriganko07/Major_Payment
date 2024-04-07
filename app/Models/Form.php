<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = "forms";
    protected $primaryKey = "booking_id";

    public function payments()
    {
        return $this->hasMany(Payment::class, 'booking_id', 'booking_id');
    }
}
