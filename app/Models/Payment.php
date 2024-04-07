<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payments";
    protected $primaryKey = "payment_id";

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'customer_id', 'customer_id');
    }

    public function form()
    {
        return $this->belongsTo(Form::class, 'booking_id', 'booking_id');
    }

}
