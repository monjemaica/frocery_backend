<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    public $table = "shipping_address";

    protected $fillable = ['user_id', 'fullName', 'street', 'barangay', 'city', 'mobileNumber'];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
